<?php

$full_data = "January 12 2023";
$words = explode(" ", $full_data);

$month = get_month_number($words[0]);
function get_month_number($month)
{
    $months = array(
        'january' => '01',
        'february' => '02',
        'march' => '03',
        'april' => '04',
        'may' => '05',
        'june' => '06',
        'july' => '07',
        'august' => '08',
        'september' => '09',
        'october' => '10',
        'november' => '11',
        'december' => '12'
    );

    // Convert month to lowercase to match array keys
    $month = strtolower($month);

    // Check if month exists in array
    if (array_key_exists($month, $months)) {
        return $months[$month];
    }
    return false;
}

$converted_date = $month . $words[1] . $words[2];
print_r($month . "\n");
print_r($converted_date);
print_r("\n");

// question 3.b



$full_data = "23rd February 2023";
$words = explode(" ", $full_data);


$month = get_month_number($words[1]);

function extract_number($abc)
{
    $pattern = '/^\d+/';
    if (preg_match($pattern, $abc, $matches)) {
        $number = $matches[0];
        return $number;
    }
    return 0;
}
$day = extract_number($words[0]);

$converted_date = $day . "/" . $month . "/" . $words[2];

print_r($converted_date);

?>