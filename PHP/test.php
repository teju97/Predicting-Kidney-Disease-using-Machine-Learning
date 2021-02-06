<?php

$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$e=$_POST['e'];
$f=$_POST['f'];
$g=$_POST['g'];
$h=$_POST['h'];
$i=$_POST['i'];
$j=$_POST['j'];
$k=$_POST['k'];
$l=$_POST['l'];
$m=$_POST['m'];
$n=$_POST['n'];
$data=$a.','.$b.','.$c.','.$d.','.$e.','.$f.','.$g.','.$h.','.$i.','.$j.','.$k.','.$l.','.$m.','.$n;

$file="p1.csv";

file_put_contents($file, $data . PHP_EOL);
if (system("python knn-predict.py") == "present"){
 
$o=$_POST['o'];
$g=$_POST['g'];
$i=$_POST['i'];
$n=$_POST['n'];

$data=$o.','.$g.','.$i.','.$n;

$file="p-2.csv";

file_put_contents($file, $data . PHP_EOL);
exec("python sp-5_input.py", $output);
header("Location: /FYP/".$output[0].".html"); /* Redirect browser */
  exit();
 }
else{
  header("Location: /FYP/Result_negative.html"); /* Redirect browser */
  exit();
}
?>
