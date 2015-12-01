<?php

require 'parks_logins.php';
require 'db_connect.php';

$parks = [
    ['name' => 'Acadia', 'description' => 'Covering most of Mount Desert Island and other coastal islands, Acadia features the tallest mountain on the Atlantic coast of the United States, granite peaks, ocean shoreline, woodlands, and lakes. There are freshwater, estuary, forest, and intertidal habitats', 'area_in_acres' => '47,389.67', 'date_established' => 'February 26, 1919', 'location' => 'Maine'],
    ['name' => 'American Samoa', 'description' => 'The southernmost national park is on three Samoan islands and protects coral reefs, rainforests, volcanic mountains, and white beaches. The area is also home to flying foxes, brown boobies, sea turtles, and 900 species of fish.', 'area_in_acres' => '9,000.00', 'date_established' => 'February 26, 1919', 'location' => 'American Samoa'],
    ['name' => 'Arches', 'description' => 'This site features more than 2,000 natural sandstone arches, including the famous Delicate Arch. In a desert climate, millions of years of erosion have led to these structures, and the arid ground has life-sustaining soil crust and potholes, which serve as natural water-collecting basins. Other geologic formations are stone columns, spires, fins, and towers', 'area_in_acres' => '76,518.98', 'date_established' => 'April 12, 1929', 'location' => 'Utah'],
    ['name' => 'Badlands', 'description' => 'The Badlands are a collection of buttes, pinnacles, spires, and grass prairies. It has rich fossil beds from the Oligocene epoch, and the wildlife includes bison, bighorn sheep, black-footed ferrets, and swift foxes.', 'area_in_acres' => '242,755.94', 'date_established' => 'November 10, 1978', 'location' => 'South Dakota'],
    ['name' => 'Carlsbad Caverns', 'description' => 'Carlsbad Caverns has 117 caves, the longest of which is over 120 miles (190 km) long. The Big Room is almost 4,000 feet (1,200 m) long, and the caves are home to over 400,000 Mexican Free-tailed Bats and sixteen other species. Above ground are the Chihuahuan Desert and Rattlesnake Springs.', 'area_in_acres' => '46,766.45', 'date_established' => 'May 14, 1930', 'location' => 'New Mexico'],
    ['name' => 'Denali', 'description' => 'Centered around Mount McKinley, the tallest mountain in North America, Denali is serviced by a single road leading to Wonder Lake. McKinley and other peaks of the Alaska Range are covered with long glaciers and boreal forest. Wildlife includes grizzly bears, Dall sheep, caribou, and gray wolves.', 'area_in_acres' => '4,740,911.72', 'date_established' => 'February 26, 1917', 'location' => 'Alaska'],
    ['name' => 'Everglades', 'description' => 'The Everglades are the largest subtropical wilderness in the United States. This mangrove ecosystem and marine estuary is home to 36 protected species, including the Florida panther, American crocodile, and West Indian manatee. Some areas have been drained and developed; restoration projects aim to restore the ecology.', 'area_in_acres' => '1,508,537.90', 'date_established' => 'May 30, 1934', 'location' => 'Florida'],
];

foreach($parks as $park)
{
    $query = "INSERT INTO parks (name, description, area_in_acres, date_established, location)
            VALUES (:name, :description, :area_in_acres, :date_established, :location)";

    $stmt = $dbc->prepare($query);

    $stmt->bindValue(':name', $park['name'], PDO::PARAM_STR);
    $stmt->bindValue(':description', $park['description'], PDO::PARAM_STR);
    $stmt->bindValue(':area_in_acres', $park['area_in_acres'], PDO::PARAM_STR);
    $stmt->bindValue(':date_established', $park['date_established'], PDO::PARAM_STR);
    $stmt->bindValue(':location', $park['location'], PDO::PARAM_STR);

    $stmt->execute();

}
