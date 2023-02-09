<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount('ccc-pegea-firebase-adminsdk-djxd6-e2a9b24b51.json')
    ->withDatabaseUri('https://ccc-pegea-default-rtdb.firebaseio.com/');

    $database = $factory->createDatabase();
    $auth = $factory->createAuth();


  
?>