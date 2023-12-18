<?php

use Illuminate\Http\Client\Factory as Http;

require __DIR__ . '/../vendor/autoload.php';

$client = new Http();

$response = $client->get('https://huth.it');

echo $response->status();
