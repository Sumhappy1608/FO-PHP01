<!DOCTYPE html>
<html>
<head>
<title><h2>Bảng cửu chương bằng for</h2></title>
<style type="text/css">
	h2{
		text-align: center;
	}
	p{
		text-align: center;
	}
	table {      //1 tip tìm được trên mạng, để đặt một table có kích thước cố định vào giữa trang
		width: 780px;   
		margin-left: auto; 
		margin-right: auto; 
	}
</style>
</head>

<body>
	<h2>Bảng cửu chương bằng for</h2>
	<p>Bảng cửu chương </p>
	<table cellspacing="10">
<?php
   for($i = 2; $i <= 9; $i++)
   {
   	echo "<td>";
   	for($j = 1;$j <= 10; $j++)
   	{
   		$kq = $i * $j;
   		echo ($i ." x " .$j ." = " .$kq );
   	    echo "<br>";
   	}
   	echo "</td>";

   }
?>
</table>
</body>
</html>

