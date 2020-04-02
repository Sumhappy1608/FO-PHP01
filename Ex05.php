<?php
   $arr = array(1,4,2,6,9,100,4,);
   $NumberOfArray = sizeof($arr);
   echo("Mảng đầu vào:  ");
   for($i = 0; $i < $NumberOfArray; $i++)
   {
   	echo($arr[$i] ."    ");
   }
   echo("<br>");
   echo("Mảng khi in ra:  ");
   for($i = $NumberOfArray - 1; $i >= 0; $i--)
   {
   	echo($arr[$i] ."    ");
   }
?>