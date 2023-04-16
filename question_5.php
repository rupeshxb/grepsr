<?php
$products = array(
    'Home' => array(
        'Electronics & Accessories' => array(
            'items' => array(
                array(
                    'title' => 'SanDisk 256',
                    'price' => '24.45'
                ),
                array(
                    'title' => 'Jabra Wireless Headset',
                    'price' => '55.12'
                )
            ),
            'Accessories' => array(
                'items' => array(
                    array(
                        'title' => 'DJI OM 5 Smartphone Gimbal Stabilizer',
                        'price' => '129.99'
                    ),
                    array(
                        'title' => 'SAMSUNG Galaxy SmartTag',
                        'price' => '30.00'
                    )
                )
            )
        )
    )
);

function showProducts($products, $category = '')
{
    foreach ($products as $key => $value) {
        if (is_array($value)) {
            showProducts($value, $category);
        } else {
            if ($key === 'title') {
                $item = array(
                    'title' => $value,
                    'price' => $products['price'],
                    'category' => substr($category, 3)
                );
                print_r($item);
                echo "\n";
            }
        }
    }
}
showProducts($products);
?>