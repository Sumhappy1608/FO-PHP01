<?php
   $arr = array(1,4,2,6,9,100,45,8,20);
   $NumberOfArr = sizeof($arr);   //Số lượng các phần tử trong mảng
   $max = $arr[0];  //Giả sử phần tử lớn nhất trong mảng là phần tử đầu tiên
   for($i = 0; $i < $NumberOfArr; $i++)
   {
   	if($arr[$i] > $max)
   	{
   		$max = $arr[$i];
   		$pos = $i;
   	}
   }
   echo ("Phần tử lớn nhất trong mảng là " .$max .", nằm tại vị trí thứ " .$pos ." trong mảng");


?>