<?php
// set autoload
spl_autoload_register(function ($class) {
    require_once(str_replace('\\', '/', $class . '.php'));
});

$hook = Hook\Client::configure(array(
  'app_id' => 1,
  'key' => '006f04b4f723c9920e259a746f9318be',
  'endpoint' => 'http://hook.dev/index.php/'
));

$hook->collection('scores')->create(array(
  'name' => 'Endel',
  'score' => 7
));

