<!-- isset() function. -->

<?php
$data = "clusters";
if(isset($data)){
    echo "The variable \$data is set and not NULL. \n";
}
else{
    echo "The variable \$data is not set and/or not NULL. \n";
}

$name;
if(isset($name)){
    echo "The variable \$name is set and not NULL \n";
}
else{
    echo "The variable \$name is not set and/or NULL. \n";
}

$email = null;
if(isset($email)){
    echo "The variable \$email is set and not null. \n";
}
else{
    echo "The variable \$email is set and NULL. \n";
}
?>




