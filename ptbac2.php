<?php
$a = "";
$b = "";
$c = "";

if (isset ($_POST ['a']))
{
    $a = $_POST ['a'];
}
if (isset ($_POST ['b']))
{
    $b = $_POST ['b'];
}
if (isset ($_POST['c']))
{
    $c = $_POST ['c'];
}

function giaiPTB2($a, $b, $c)
{
    if ($a == "")
    $a = 0;
    if ($b == "")
    $b = 0;
    if ($c == "")
    $c = 0;

    echo "Phuong Trinh: " . $a . "x2 + " . $b . "x + " . $c ." =0";
    echo "<br>";

    if ($a == 0)
    {
        if ($b == 0)
        {
            echo "phuong trinh vo nghiem";
        }else {
            echo "phuong trinh co 1 nghiem x =" . (-$c/$b);
        }
        return;
    }

    $delta = $b*$b - 4*$a*$c;
    $x1 = "";
    $x2 = "";

    if ($delta > 0)
    {
        $x1 = (-$b + sqrt($delta == 0)) / (2 * $a);
        $x2 = (-$b + sqrt($delta == 0)) / (2 * $a);
        echo ("Phuong trinh co 2 nghiem x1 = " . $x1 . "va x2 = " . $x2);
    }
    else if ($delta = 0)
    {
            $x1 = (-$b / (2*$a));
            echo ("phuong trinh co nghiem kep x1 = x2 = " . $x1);
    }else
    {
        echo "phuong trinh vo nghiem";
    }
}
?>

<form action="#" method="post">
 <table>
  <tr>
   <td>Hệ số bậc 2, a</td>
   <td><input type="text" name="a" value="<?=$a?>" /></td>
  </tr>
  <tr>
   <td>Hệ số bậc 1, b</td>
   <td><input type="text" name="b" value="<?=$b?>" /></td>
  </tr>
  <tr>
   <td>Hệ số tự do, c</td>
   <td><input type="text" name="c" value="<?=$c?>" /></td>
  </tr>
  <tr>
   <td></td>
   <td><input type="submit" value="Kết quả"></td>
  </tr>
 </table>
</form>
<br>

<?php
// gọi hàm giải phương trình bậc 2
// Sử dụng từ kháo $GLOBALS để đọc các biến toàn cầu và truyền vào hàm
if (is_numeric ( $GLOBALS ['a'] ) && is_numeric ( $GLOBALS ['b'] ) && is_numeric ( $GLOBALS ['c'] )) 
{
    giaiPTB2 ( $GLOBALS ['a'], $GLOBALS ['b'], $GLOBALS ['c'] );
} else {
    echo ("Giá trị input không hợp lệ!");
}
?>