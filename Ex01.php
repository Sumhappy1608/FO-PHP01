<?php
//Giải phương trình bậc hai ax^2 + bx + c = 0
//khai báo các biến
$heso_a = "";
$heso_b = "";
$heso_c = "";

//Lấy tham số
if(isset($_POST['heso_a']))
{
  $heso_a = $_POST['heso_a'];
}
if(isset($_POST['heso_b']))
{
  $heso_b = $_POST['heso_b'];
}
if(isset($_POST['heso_c']))
{
  $heso_c = $_POST['heso_c'];
}

//Giải phương trình
function GiaiPTBac2($a,$b,$c)
{
  //kiểm tra biến đầu vào
  if($a == "")    
    $a = 0;
  if($b == "")
    $b = 0;
  if($c == "")
    $c = 0;
  echo ("Phương trình: ".$a."x^ + ".$b."x + ".$c."= 0");   //Dòng in phương trình ra màn hình
  echo "<br>";
  //Kiểm tra các hệ số 
  if($a == 0)
  {
    if($b == 0)
    {
      if($c==0)
      {
        echo ("Phương trình vô số nghiệm!");
      }
      else
      {
        echo ("Phương trình vô nghiệm!");
      }
    }
    else
    {
      echo ("Phương trình có một nghiệm duy nhất là: " .(-$c/$b));
    }
  }
  else
  {
  //Giải phương trình bằng cách tính delta
   $delta = $b*$b -4*$a*$c;
   $x1 = "";
   $x2 = "";
   if($delta > 0)
   {
     $x1 = (-$b + sqrt($delta))/(2*$a);
     $x2 = (-$b - sqrt($delta))/(2*$a);
     echo ("Phương trình có 2 nghiệm phân biệt là: "."x1 = ".$x1."; x2 = ".$x2);
   }
   else if($delta == 0)
   {
     $x1 = (-$b /(2*$a));
     echo ("Phương trình có nghiệm kép: x1 = x2 =" .$x1);
   }
   else
   {
     echo ("Phương trình vô nghiệm!");
   }
  }
}
?>
<form action="#" method="post">
 <table>
   <tr>
   <td>Hệ số a:</td>
   <td><input type="text" name="heso_a" value = "<?=$heso_a?>"/></td>
   </tr>

   <tr>
   <td>Hệ số b:</td>
   <td><input type="text" name="heso_b" value = "<?=$heso_b?>"/></td>
   </tr>

   <tr>
   <td>Hệ số c:</td>
   <td><input type="text" name="heso_c" value = "<?=$heso_c?>"/></td>
   </tr>

     <tr>
   <td></td>
   <td><input type="submit" value = "Kết quả"/></td>
   </tr>
 </table>
</form>

<?php
 //gọi hàm tính phương trình bậc hai
if(is_numeric($GLOBALS['heso_a']) && is_numeric($GLOBALS['heso_b']) && is_numeric($GLOBALS['heso_c'] ))
{
  GiaiPTBac2 ( $GLOBALS ['heso_a'], $GLOBALS ['heso_b'], $GLOBALS ['heso_c'] );
}
else
{
  echo ("Giá trị bạn nhập không hợp lệ!");
}
?>