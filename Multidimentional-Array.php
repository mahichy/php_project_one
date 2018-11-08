<?php
//multidimentional array (Class-9)

$father=array(
	'shoshi'=>array('age'=>30,'sub'=>'text','hobby'=>'readding'),
	'shahana'=>array('age'=>28,'sub'=>'Accounting','hobby'=>'Sleeping'),
	'shawon'=>array('age'=>26,'sub'=>'English','hobby'=>'playing'),
	'sadia'=>array('age'=>24,'sub'=>'IT','hobby'=>'Cooding'),
);

echo $father['shoshi']['age'].'<br>';
echo $father['shoshi']['sub'].'<br>';
echo $father['shoshi']['hobby'].'<br>';
echo $father['shahana']['age'].'<br>';
echo $father['shahana']['sub'].'<br>';
echo $father['shahana']['hobby'].'<br>';
echo $father['shawon']['age'].'<br>';
echo $father['shawon']['sub'].'<br>';
echo $father['shawon']['hobby'].'<br>';
echo $father['sadia']['age'].'<br>';
echo $father['sadia']['sub'].'<br>';
echo $father['sadia']['hobby'].'<br>';


?>