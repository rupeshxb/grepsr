<!-- Floor with precision -->
<?php
function convert($num, $precision)
{
    $factor = pow(10, $precision);
    return floor($num * $factor) / $factor;
}

$result = convert(2.45678, 3);

print_r($result);
?>