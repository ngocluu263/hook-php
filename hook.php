<?php
// set autoload
require 'vendor/autoload.php';

#use Guzzle\Http\Client;

$hook = Hook\Client::configure(array(
  'app_id' => 1,
  'key' => '006f04b4f723c9920e259a746f9318be',
  'endpoint' => 'http://hook.dev/index.php/'
));

$hook->collection('scores')->create(array(
  'name' => 'Endel',
  'score' => 7
));

