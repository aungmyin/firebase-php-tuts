<?php

require __DIR__.'/vendor/autoload.php';

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

/*$newPost = $database
    ->getReference('blog/posts')
    ->push([
        'title' => 'Post title 3',
        'body' => 'This should probably be longer more than second post.'
    ]);*/

//$newPost->getKey(); // => -KVr5eu8gcTv7_AHb-3-
//$newPost->getUri(); // => https://my-project.firebaseio.com/blog/posts/-KVr5eu8gcTv7_AHb-3-

//$newPost->getChild('title')->set('Changed post title');
//$newPost->getValue(); // Fetches the data from the realtime database
//$newPost->remove(); //remove data
//$database->getReference('blog/posts')->getChild('-LdhVtTYUvEVTYzSQnmO')->remove();

$database->getReference('blog/posts')->getChild('-LdhWAt1vjtxjfMhSKey')->getChild('title')->set('Post title Media Library');