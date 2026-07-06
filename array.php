<?php
// numeric array,index array
$a=array(10,20,30,40,50);
echo $a[0]=60;
echo"<br>";
echo $a[1];
echo"<br>";
echo $a[3];
echo"<br>";
for($i=0;$i<count($a);$i++)
{
	echo $a[$i];
}
echo"<br>";
$num=array("Atmiya","university","Rajkot");
echo $num[0];
echo $num[1];
echo $num[2];
echo"<br>";


//associative array
$b=array('name'=>"khushi",'city'=>"rajkot");
echo $b['name'];
echo $b['city'];
echo"<br>";
print_r($b);
echo"<br>";
var_dump($b);
echo"<br>";
foreach ($b as $v)
{
	echo $v;
}
echo"<br>";
//multidimesional array
$c=array(array(1,2,3),array("rajkot","atmiya","university"));

echo"<br>";
print_r($c);
echo"<br>";
for($i=0;$i<count($c);$i++)
{
	for($j=0;$j<=count($c);$j++)
	{
		echo $c[$i][$j];
	}
}
echo"<br>";
echo $c[0][0];
echo"<br>";
echo $c[0][1];
echo"<br>";
echo $c[0][2];
echo"<br>";
echo $c[1][0];
echo"<br>";
echo $c[1][1];
echo"<br>";
echo $c[1][2];
echo"<br>";





?>