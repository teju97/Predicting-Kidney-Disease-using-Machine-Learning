import csv
import random
import math
import operator

#to handle division by zero
def safediv(x,y):
    if y == 0:
        return 0
    return x / y

#read data from the dataset	
def loadCsv(filename):
	lines = csv.reader(open(filename))
	dataset = list(lines)
	for i in range(len(dataset)):
		dataset[i] = [float(x) for x in dataset[i]]
	return dataset

#splitting the dataset using the split ratio defined 
def splitDataset(dataset, splitRatio):
        trainSize = int(len(dataset) * splitRatio)
        trainingSet = []
        copy = list(dataset)
        i=0
        while len(trainingSet) < trainSize:
            trainingSet.append(copy.pop(i))
        testSet = copy
        return trainingSet

#function to find Euclidean Distance        
def euclideanDistance(instance1, instance2, length):
	distance = 0
	for x in range(length):
		distance += pow((instance1[x] - instance2[x]), 2)
	return math.sqrt(distance)

#function to get neighbors of a certain point 
def getNeighbors(trainingSet, testInstance, k):
	distances = []
	length = len(testInstance)-1
	for x in range(len(trainingSet)):
		dist = euclideanDistance(testInstance, trainingSet[x], length)
		distances.append((trainingSet[x], dist))
	distances.sort(key=operator.itemgetter(1))
	
	neighbors = []
	for x in range(k):
		neighbors.append(distances[x][0])
	return neighbors

#function to get prediction based on neighbors present	
def getResponse(neighbors):
	classVotes = {}
	for x in range(len(neighbors)):
		response = neighbors[x][-1]
		if response in classVotes:
			classVotes[response] += 1
		else:
			classVotes[response] = 1
	sortedVotes = sorted(classVotes.items(), key=operator.itemgetter(1), reverse=True)
	return sortedVotes[0][0]

#main function	
def main():

    #prepare data
    trainingSet=[]
    pSet=[]
    dataset = loadCsv('14Att+class.csv')
    pSet = loadCsv('p1.csv')
    trainingSet = splitDataset(dataset,0.9)
    
    # generate predictions
    predictions=[]
    k = 3
    for x in range(len(pSet)):
        neighbors=getNeighbors(trainingSet, pSet[x], k)
        result=getResponse(neighbors)
        predictions.append(result)
        if result == 1:
           z = 'present'
        else:
           z = 'absent'
        print(z)
	
main()
