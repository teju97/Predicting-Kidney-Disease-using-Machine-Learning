<?php

$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];

$data=$a.','.$b.','.$c.','.$d;

$file="p-2.csv";

file_put_contents($file, $data . PHP_EOL);
exec("python sp-5_input.py", $output);
header("Location: /FYP/".$output[0].".html"); /* Redirect browser */
?>
