<?php

require __DIR__ . '/vendor/autoload.php';

$client = new \GuzzleHttp\Client([
    'base_url' => 'http://symfonyrestapi.l',
    'defaults' => [
        'exceptions' => false,
    ]
]);

$response = $client->post('/api/programmers');

echo $response;