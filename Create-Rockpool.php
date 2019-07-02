<?php






require_once __DIR__ . '/Rock_pool.php';
require_once __DIR__ . '/Starfish.php';





// Create the rockpool object
$objRockpool = new \Rock_pool\Rockpool(6, 1.4, 4, 4.6);
$objStarfish = new \Starfish\Starfish('Patric_Star', 2012, 'Patricia_Star', 2011);

// Print the rockpool
print_r($objRockpool);
 