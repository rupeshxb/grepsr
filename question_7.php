<?php
$given_url = 'https://dummyjson.com/products/search?q=Laptop';
// read json data from file
$json_data = file_get_contents('https://dummyjson.com/products/search?q=Laptop');

// decode json data
$data = json_decode($json_data, true);

// create csv file
$csv_file = fopen('laptop.csv', 'w');

// write column headers
fputcsv($csv_file, array('Title', 'Price', 'Brand'));

// iterate through products
foreach ($data['products'] as $product) {
    // extract data
    $title = $product['title'];
    $price = $product['price'];
    $brand = $product['brand'];

    // write data to csv file
    fputcsv($csv_file, array($title, $price, $brand));
}

// close csv file
fclose($csv_file);
?>