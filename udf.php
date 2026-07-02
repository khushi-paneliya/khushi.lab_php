<?php

//simple function
function name()
{

	echo $x=20;
}
name();
echo "<br>";
//Argument function
//1. call by value 
function sum($num)
{

	echo $num=$num+5;
}
echo "<br>";
$y=20;
echo "<br>";
sum($y);

echo "<br>";
//2. call by reference
function add(&$num)
{
	echo$num=$num+5;
}
echo "<br>";
$z=10;
echo "<br>";
add($z);

echo $z;
echo "<br>";
// function with return value
function sum1($a,$b)
{
	$c=$a+$b;
	return $c;
}
echo "<br>";
echo sum1(10,20);
echo "<br>";
//default argument
function sum2($a,$b,$c=5)
{
	echo $a+$b+$c;
}
echo "<br>";
sum2(1,2,3);
echo "<br>";
sum2(4,6);
echo "<br>";

//nesting of function
function one($name)
{
	echo $name;
}
echo "<br>";
function two()
{
	echo "this is two";
	one("this is one");
}
echo "<br>";
two();
echo "<br>";
//variable function
function krishna($name)
{
	echo $name;
}
echo "<br>";
$k="krishna";
$k("Yadav");
?>