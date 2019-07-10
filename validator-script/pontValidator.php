<?php


require('vendor/autoload.php');


const key = '8765c8cd9e68e5568e25d862cc8dc576257867c';

use GuzzleHttp\Client;
use Stanley\Geocodio\Client as GEOClient;

// List to retrieve each map with normal pattern.
$normalList = ['art-galleries', 'bike-racks', 'breweries', 'city-halls', 'city-parks-greenville', 'city-parks-greer', 'coworking-spaces', 'community-gardens', 'dog-parks', 'dog-waste-bags', 'dog-friendly-restaurants-and-bars', 'dog-friendly-retail-stores', 'electric-vehicle-charging-stations', 'farmers-markets', 'fishing-access-sites', 'foothills-trail-access', 'free-job-training-resources', 'go-karts-mini-golf-arcades', 'greer-public-parking', 'higher-education', 'historic-sites', 'historical-african-american-churches', 'libraries', 'live-theatres', 'mice-on-main', 'music-venues', 'organic-farms', 'parking-decks', 'playgrounds', 'ib-schools-k12', 'public-restrooms-downtown/', 'public-running-tracks', 'quilting-guilds', 'recreation-baseball-fields', 'recreation-basketball-courts/', 'roller-skating-and-skateboarding/', 'solid-waste', 'swamp-rabbit-trail-entrances', 'swamp-rabbit-trail-mile-markers', 'swamp-rabbit-trail-parking', 'swamp-rabbit-trail-water-fountains', 'falls-park-benches', 'tent-camping', 'historic-textile-mills', 'tree-planting-sites', 'walking-trails', 'wall-murals', 'waterfalls'];

// Special url's for byclce and wifi hotspots
$specList = ['https://data.openupstate.org/map/cache/bcycle/stations.geojson', 'https://joinopenworks.com/wifi/guest-wi-fi-google-spreadsheet-to-geojson.php'];

// Spec list layers
$specListLayers = ['bcycle', 'wifi-hotspots'];


// Returned Category json list
$categories = [];

// According to geocodio, addresses will return in the same order 
$pointTitles = [];

// Coordinates in same order as pointTitles for recombination if point failure
$pointCoords = [];

// Layer for each point
$pointLayer = [];

// Failed points collection for alerts
$failedPoints = [];

// Layered list for keeping track of which layer 
$layerList = [];

// Email message body
$emailBody ='';


// Normal Pattern for Open data's api.
$greenClient = new Client([
    'base_uri' => "https://data.openupstate.org/map/geojson/",
    'timeout' => 2.0,
]);



/*
    
    Every Category will get a seperate response that will be parsed for titles and coordinates of each layer. This is prep for geocodio api call

*/

// Normal pattern for most of open data
foreach($normalList as $layer){
     
    $layerResponse = $greenClient->request('GET', $layer );

    $greenData = $layerResponse->getBody();
    $greenDecoded = json_decode($greenData, true);
    
    $categories[] = $greenDecoded;
    
    $layerList[]= $layer;
    
}

$specialClient = new Client();

$specLayerCounter = 0;
// Special list
foreach($specList as $layer){

    $specResponse = $specialClient->request('GET', $layer);

    $specData = $specResponse->getBody();
    $specDecoded = json_decode($specData, true);

    $categories[] = $specDecoded;
    $layerList[] = $specListLayers[$specLayerCounter];
}

$layerCount = 0;
// Loops through decoded json to get individual points information
foreach($categories as $features){
    
    // Gets pointCoords, pointTitles, and pointLayer for each point
    foreach($features['features'] as $point){
            
        // Checks for starting blank array
        if($point['geometry']['coordinates'][0] !== 0){
            
            // When a title, location, or name exist, it creates a point recording a title, coords, and what layer it's from
            if(isset($point['properties']['title'])){
                $pointTitles[] = $point['properties']['title'];
                $pointCoords[] = $point['geometry']['coordinates'][1] . "," . $point['geometry']['coordinates'][0];
                $pointLayer[] = $layerList[$layerCount];


            } else if (isset($point['properties']['name'])) {
                $pointTitles[] = $point['properties']['name'];
                $pointCoords[] = $point['geometry']['coordinates'][1] . "," . $point['geometry']['coordinates'][0];
                $pointLayer[] = $layerList[$layerCount];
             
            } else if (isset($point['properties']['location'])) {
                $pointTitles[] = $point['properties']['location'];
                $pointCoords[] = $point['geometry']['coordinates'][1] . "," . $point['geometry']['coordinates'][0];
                $pointLayer[] = $layerList[$layerCount];

            } else if (isset($point['properties']['owner'])) {
                $pointTitles[] = "Owner -- " . $point['properties']['owner'];
                $pointCoords[] = $point['geometry']['coordinates'][1] . "," . $point['geometry']['coordinates'][0];
                $pointLayer[] = $layerList[$layerCount];
            
            } else {
                echo "<pre>";
                print_r($point);
                echo "</pre><br>";
            }

        }
    } 
    $layerCount += 1;  
}





// Create the new GEOClient object by passing in your api key
$client = new GEOClient(key);

// Takes an array of coords, and sends back most likely address(10)
$address_sets = $client->reverse($pointCoords);
$geoAddresses[] = json_decode(json_encode($address_sets), true);

$resultCounter = 0;


// Checks only the first return for matching because geocodio returns 10 likely
foreach($geoAddresses[0]['response']['results'] as $result){
    
    // If result is empty from geocodio then point is not of this world!
    if(isset($result['response']['results'][0]['address_components']['state'])){

        // Checks if the point was within SC, GA, or NC. If not, it fails
        if($result['response']['results'][0]['address_components']['state'] !== "SC" && $result['response']['results'][0]['address_components']['state']!== "GA" && $result['response']['results'][0]['address_components']['state'] !== "NC"){
            
            // Adds failed point to array.
            $failedPoints[] = array('title'=>$pointTitles[$resultCounter],'coords'=>$pointCoords[$resultCounter], 'layer' => $pointLayer[$resultCounter]);
            
            // Email body builder.
            $emailBody = $emailBody .  "Point " . $pointTitles[$resultCounter] . " with LAT and LONG of " . $pointCoords[$resultCounter] . " on Layer " . $pointLayer[$resultCounter] . " has failed.\n";
        }
    } else {
        // Adds failed point to array.
        $failedPoints[] = array('title'=>$pointTitles[$resultCounter],'coords'=>$pointCoords[$resultCounter], 'layer' => $pointLayer[$resultCounter]);


        // Email body builder.
        $emailBody = $emailBody . "Point " . $pointTitles[$resultCounter] . " with LAT and LONG of " . $pointCoords[$resultCounter] . " on Layer " . $pointLayer[$resultCounter] . " has failed.\n";
    }
    
  
    $resultCounter +=1;
    
}


// Email failed points ******* Needs an admin email ********
mail('someone@example.com', "Failed Points list", $emailBody);