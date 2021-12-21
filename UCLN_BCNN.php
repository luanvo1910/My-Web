<?php
function UCLN($a, $b)
{
    if ($b == 0) return $a;
    return UCLN($b, $a % $b);
}

function BCNN($a, $b)
{
    return ($a * $b) / UCLN($a, $b);
}
?>