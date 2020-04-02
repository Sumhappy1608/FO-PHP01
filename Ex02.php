<?php

//Tính tổng S = 1//1! + 2/2! +...+n/n!
//khai báo các biến
$heso_n = "";

//Lấy tham số
if(isset($_POST['heso_n']))
{
  $heso_n = $_POST['heso_n'];
}

function TinhTongS($n)
{
  //kiểm tra biến đầu vào
  if($n == "")    
    $n = 0;

  //Tính toán tổng S
  if($n == 0)   //Một bài toán có mẫu là 0 không hợp lệ
  {
  	echo ("Phép toán không hợp lệ!");
  }
  else
  {
  	echo ("Tính tổng S = 1//1! + 2/2! +...+" .$n ."/" .$n ."!");   
    echo "<br>";
    $sum = 0;
    $mul = 1;
    for($i = 1; $i <= $n ; $i++)
    {
  	   $mul = $mul * $i;
  	   $sum = $sum + $i/$mul;
    }

     echo ("Kết quả khi tính tổng S = " .$sum);
    }
}

?>

<form action="#" method="post">
 <table>
   <tr>
   <p>Tính tổng S = 1//1! + 2/2! +...+n/n! </p> 
   <td>Nhập n:</td>
   <td><input type="text" name="heso_n" value = "<?=$heso_n?>"/></td>
   </tr>

    <tr>
   <td></td>
   <td><input type="submit" value = "Kết quả"/></td>
   </tr>
 </table>
</form>

<?php
if(is_numeric($GLOBALS['heso_n']))
{
  TinhTongS ( $GLOBALS ['heso_n']);
}
else
{
  echo ("Giá trị bạn nhập không hợp lệ!");
}
?>