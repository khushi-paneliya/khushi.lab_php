<?php

//local variable
function test()
{
	$a=10;
	echo $a;
}
test();
echo "<br>";
//globle 
$b=50;
function show()
{

    global $b;
    echo $b;

}
show();

echo "<br>";

function counter()
{

	static $count=0;
	$count++;
	echo $count;
}
counter();
?>