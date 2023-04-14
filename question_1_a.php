<!-- The isset() function. -->

<?php
$data = "clusters";
if(isset($data)){
    echo "The variable \$data is set and not NULL.";
    // The output will be shown because isset returns true as the $data variable is set 
    // to a certain value and is not null.
}

$name;
if(isset($name)){
    echo "The variable \$name is not set";
    // The output won't be shown because isset returns false as $name varable doesn't hold any value
}

$email = null;
if(isset($email)){
    echo "The variable \$email is set to null.";
    // This output won't be shown because isset returns false as $email variable is set to null.
}
?>




