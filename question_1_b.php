<!-- empty() function -->

<?php
$counter = null;
if(empty($counter)){
    echo "The variable \$counter is empty. \n";
}
else{
    echo "The variable \$counter is not empty. \n";
}

$name = '';
if(empty($name)){
    echo "The variable \$name is empty. \n";
}
else{
    echo "The variable \$name is not empty.";
}

$value = 0.0;
if(empty($value)){
    echo "The variable \$value is empty. \n";
}
else{
    echo "The variable \$value is not empty. \n";
}

$status = false;
if(empty($status)){
    echo "The variable \$status is empty. \n";
}
else{
    echo "The variable \$status is not empty. \n";
}

$myArray = array();
if(empty($myArray)){
    echo "The variable \$myArray is empty. \n";
}
else{
    echo "The variable \$myArray is not empty. \n";
}
?>