<?php
// set autoload
require 'vendor/autoload.php';


//$hook = Hook\Client::configure(array(
//  'app_id' => 1,
//  'key' => '638d9ba9643e568c1065084e3e67fb7e',
//  'endpoint' => 'http://192.168.116.135:4665/index.php/'
//));
$hook = Hook\Client::configure(array(
  'app_id' => 1,
  'key' => '57ec549c9f303e0a188b4567',
  'endpoint' => 'http://192.168.116.135:4665/index.php/'
));

$hook->collection('scores')->create(array(
  'name' => 'Endel',
  'score' => 7
));

#printf("Content: %s", $hook->collection('scores')->get());


