<form action="#" method="post">
<h2>Tinhs UCLN và BCNN của 2 số tự nhiên</h2>
<table>
    <tr>
        <td>Nhập số tự nhiên a</td>
        <td><input type="number" name="a" /></td>
    </tr>
    <tr>
        <td>Nhập số tự nhiên b</td>
        <td><input type="number" name="b" /></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Kết quả"></td>
    </tr>
</table>
</form>

<?php
function USCLN($a, $b) {
    if ($b == 0) return $a;
    return USCLN($b, $a % $b);
}

function BSCNN($a, $b) {
    return ($a * $b) / USCLN($a, $b);
}

$a = 0;
$b = 0;
if (isset ($_POST ['a']))
{
    $a = $_POST ['a'];
}
if (isset ($_POST ['b']))
{
    $b = $_POST ['b'];
}
echo ("Ước số chung lớn nhất: " . USCLN($GLOBALS ['a'], $GLOBALS ['b']));
echo ("<br>");
echo ("Bội số chung nhỏ nhất: " . BSCNN($GLOBALS ['a'], $GLOBALS ['b']));
?>