<?php
$number=20;

			for ($i=1; $i<=$number;$i++)
			{
			for ($j=$number;$j>$i;$j--)
			{

			printf("&nbsp;&nbsp");
			}
			for ($k=1; $k<=(2*$i-1);$k++)
			{
			printf("*");
			}

			printf("<br>");
			}

			for ($i=$number; $i>=1;$i--)
			{
			for ($j=$number;$j>$i;$j--)
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
