# Importing the required packages 
import numpy as np 
import pandas as pd 
from sklearn.model_selection import train_test_split 
from sklearn.tree import DecisionTreeClassifier 
from sklearn.metrics import accuracy_score 
  
# Function importing Dataset 
def importdata(): 
    balance_data = pd.read_csv( 'sp-2.csv', sep= ',', header = None) 
    p_data = pd.read_csv( 'p-2.csv', sep= ',', header = None) 
    return balance_data, p_data 
  
# Function to split the dataset 
def splitdataset(balance_data): 
  
    # Seperating the target variable 
    x = balance_data.values[:, 0:3] 
    y = balance_data.values[:, 4] 
   
    # Spliting the dataset into train and test 
    x_train, x_test, y_train, y_test = train_test_split(x, y, test_size = 0.2, random_state = 1) 
    return x, y, x_train, y_train

def splitp(p_data):
    p = p_data.values[:, 0:3]
    return p
      
# Function to perform training with giniIndex. 
def train_using_gini(x_train, y_train): 
    clf_gini = DecisionTreeClassifier(criterion = "gini",random_state = 1,max_depth=3, min_samples_leaf=5) 
    clf_gini.fit(x_train, y_train) 
    return clf_gini 
      
# Function to make predictions 
def prediction(X_test, clf_object): 
    y_pred = clf_object.predict(X_test) 
    return y_pred 
      
# Driver code 
def main(): 
      
    # Building Phase 
    data, p_data = importdata() 
    x, y, x_train, y_train = splitdataset(data)
    p_test = splitp(p_data)
    clf_gini = train_using_gini(x_train, y_train) 
      
    # Prediction using gini 
    y_pred_gini = prediction(p_test, clf_gini)
    for i in range(len(y_pred_gini)):
        print(y_pred_gini[i])
    print("\n")

if __name__=="__main__": 
    main() 
