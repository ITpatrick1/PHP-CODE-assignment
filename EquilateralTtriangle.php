<?php
$num=10;

			for ($i=1; $i<=$num;$i++)
			{
			for ($j=$num;$j>$i;$j--)
			{

			printf("&nbsp;&nbsp");
			}
			for ($k=1; $k<=(2*$i-1);$k++)
			{
			printf("*");
			}

			printf("<br>");
			}

?>