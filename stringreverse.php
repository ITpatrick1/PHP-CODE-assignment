<?php

$mystring="EXPERINCE IS NOT CREATED";
echo $mystring."<br>"."<br>";

$len=strlen($mystring);


for ($i=($len-1); $i >=0 ; $i--) { 
	echo $mystring[$i];
	
}
?>