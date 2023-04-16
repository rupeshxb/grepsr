<?php
$url_sort_by_stars = 'https://github.com/search?o=desc&q=php&s=stars&type=Repositories';
$page_numbers = 10;

// create an empty array to hold the listings
$listings = array();

// loop through each page and extract data from each listing
for ($page = 1; $page <= $page_numbers; $page++) {
    $url = $url_sort_by_stars . '&p=' . $page;
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $list_elements = $dom->getElementsByTagName('li');

    foreach ($list_elements as $list_element) {
        $listing = array();
        $title_element = $list_element->getElementsByTagName('a')->item(0);
        $description_element = $list_element->getElementsByTagName('p')->item(0);
        $sponsored_element = $list_element->getElementsByTagName('a')->item(1);
        $topics_element = $list_element->getElementsByTagName('div')->item(2);
        $stars_element = $list_element->getElementsByTagName('a')->item(2);
        $language_element = $list_element->getElementsByTagName('span')->item(2);
        $license_element = $list_element->getElementsByTagName('span')->item(3);
        $date_element = $list_element->getElementsByTagName('relative-time')->item(0);
        $commits_element = $list_element->getElementsByTagName('span')->item(6);

        // extract data and store in the $listing array
        // $listing['repo'] = $title_element->textContent;
        // $listing['description'] = $description_element->textContent;
        // $listing['is_sponsored'] = $sponsored_element ? 'yes' : 'no';
        // $listing['topics'] = str_replace(' · ', '|', $topics_element->textContent);
        // $listing['stargazers'] = $stars_element->textContent;
        // $listing['language'] = $language_element->textContent;
        // $listing['license'] = $license_element->textContent;
        // $listing['date'] = date('d/m/Y', strtotime($date_element->getAttribute('datetime')));
        // $listing['commits'] = $commits_element->textContent;

        // add the $listing array to the $listings array
        $listings[] = $listing;
    }

    // wait for 5 seconds before making the next request
    sleep(5);
}

// create a new CSV file and write the data to it
$file = fopen('repositories.csv', 'w');
$header = array_keys($listings[0]);
fputcsv($file, $header);

foreach ($listings as $listing) {
    fputcsv($file, $listing);
}

fclose($file);

echo 'Data written to repositories.csv file successfully';
?>