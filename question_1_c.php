<!-- array_map() function -->


<?php
$cube_func = function ($n) {
    return $n * $n * $n;
};

$numbers = array(1, 2, 3, 4, 5);

$cubed_numbers = array_map($cube_func, $numbers);

print_r($cubed_numbers);
?>