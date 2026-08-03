<?php
setcookie("username","atmiya",time()+3600);
if(isset($_COOKIE['username']))
{
	echo "Cookie is set for ". $_COOKIE['username'];
}
else
{
	echo"Cookie is not set";
}
?>