<?php
// set autoload
require 'vendor/autoload.php';


//$hook = Hook\Client::configure(array(
//  'app_id' => 1,
//  'key' => '638d9ba9643e568c1065084e3e67fb7e',
//  'endpoint' => 'http://192.168.116.135:4665/index.php/'
//));
$hook = Hook\Client::configure(array(
  'app_id' => '57ec549c9f303e0a188b4567',
  'key' => '17fdce1ac1d58d42c281de1ea35f2f7d',
  'endpoint' => 'http://192.168.116.135:4665/'
));

$hook->collection('scores')->create(array(
  'name' => 'Endel',
  'score' => 7
));





