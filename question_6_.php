<?php
$url_base = 'https://github.com/search?o=desc&q=php&s=stars&type=Repositories&p=';
$num_pages = 1;
$listings = array();

for ($page = 1; $page <= $num_pages; $page++) {
    $url = $url_base . $page;
    $html = file_get_contents($url);

    // use DOMDocument to parse HTML
    $dom = new DOMDocument();
    @$dom->loadHTML($html);

    // find all listing elements
    $list_elements = $dom->getElementsByTagName('li');
    foreach ($list_elements as $list_element) {
        // extract title and description from each listing element
        $title_element = $list_element->getElementsByTagName('a')->item(0);
        $title = $title_element ? $title_element->nodeValue : '';
        $description_element = $list_element->getElementsByTagName('p')->item(0);
        $description = $description_element ? $description_element->nodeValue : '';

        // add listing to $listings array
        if ($title && $description) {
            $listings[] = array(
                'title' => trim($title),
                'description' => trim($description)
            );
        }
    }

    // sleep for 2 seconds before requesting the next page
    // sleep(2);
}

// print all listings
// foreach ($listings as $listing) {
//     echo $listing['title'] . ' - ' . $listing['description'] . PHP_EOL;
// }
// write data to CSV file
$file = fopen('repositories.csv', 'w');
fputcsv($file, array('Title', 'Description'));
foreach ($listings as $listing) {
    fputcsv($file, $listing);
}
fclose($file);
echo "Data saved to CSV file repositories.csv\n";

?>