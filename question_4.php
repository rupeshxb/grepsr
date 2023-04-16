<?php
$provided_email = "abc@grepsr.com";
$words = preg_split('/[\@\.]/', $provided_email, -1);
print_r($words);
?>