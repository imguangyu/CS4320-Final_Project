<!DOCTYPE html>
<head>

  <title>Login</title>
</head>
<body>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/home/ec2-user/vendor/autoload.php'); // include Composer's autoloader

$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->demo->beers;

$result = $collection->insertOne( [ 'name' => 'Hinterland', 'brewery' => 'BrewDog' ] );

echo "Inserted with Object ID '{$result->getInsertedId()}'";
?>






</body>
