<!-- isset() function. -->

<?php
$data = "clusters";
if (isset($data)) {
    echo "The variable \$data is set and not NULL. \n";
} else {
    echo "The variable \$data is not set and/or not NULL. \n";
}

$name;
if (isset($name)) {
    echo "The variable \$name is set and not NULL \n";
} else {
    echo "The variable \$name is not set and/or NULL. \n";
}

$email = null;
if (isset($email)) {
    echo "The variable \$email is set and not null. \n";
} else {
    echo "The variable \$email is set and NULL. \n";
}
?>

<!-- empty() function -->

<?php
$counter = null;
if (empty($counter)) {
    echo "The variable \$counter is empty. \n";
} else {
    echo "The variable \$counter is not empty. \n";
}

$name = '';
if (empty($name)) {
    echo "The variable \$name is empty. \n";
} else {
    echo "The variable \$name is not empty.";
}

$value = 0.0;
if (empty($value)) {
    echo "The variable \$value is empty. \n";
} else {
    echo "The variable \$value is not empty. \n";
}

$status = false;
if (empty($status)) {
    echo "The variable \$status is empty. \n";
} else {
    echo "The variable \$status is not empty. \n";
}

$myArray = array();
if (empty($myArray)) {
    echo "The variable \$myArray is empty. \n";
} else {
    echo "The variable \$myArray is not empty. \n";
}
?>

<!-- array_map() function -->


<?php
$cube_func = function ($n) {
    return $n * $n * $n;
};

$numbers = array(1, 2, 3, 4, 5);

$cubed_numbers = array_map($cube_func, $numbers);

print_r($cubed_numbers);
?>