<?php
//Firebase and PHP Tutorials link :: https://www.youtube.com/watch?v=3ACxp56r7ag
require_once './vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

// This assumes that you have placed the Firebase credentials in the same directory
// as this PHP file.
$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/secret/php-tutorial-a5c1a-aa19fce4a903.json');

$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    // The following line is optional if the project id in your credentials file
    // is identical to the subdomain of your Firebase project. If you need it,
    // make sure to replace the URL with the URL of your project.
   // ->withDatabaseUri('https://php-tutorial-a5c1a.firebaseio.com')
    ->create();

$database = $firebase->getDatabase();

print_r($database);