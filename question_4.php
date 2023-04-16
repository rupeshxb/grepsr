<!-- 
    4. Write a code using Regex, to solve problem listed:
    a. Provided String: “abc@grepsr.com”
    b. Create an array with three values. Example: [‘abc’, ’grepsr’, ‘com’]
    c. Ref: https://regex101.com/ (Try/Test) 
-->
<?php
$provided_email = "abc@grepsr.com";
$words = preg_split('/[\@\.]/', $provided_email, -1, PREG_SPLIT_NO_EMPTY);
print_r($words);
?>