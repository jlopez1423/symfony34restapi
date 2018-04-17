<?php

require __DIR__ . '/vendor/autoload.php';

$client = new \GuzzleHttp\Client([
    'base_url' => 'http://symfonyrestapi.l',
    'defaults' => [
        'exceptions' => false,
    ],
]);

$nickname = 'ObjectOrienter' . rand(0, 999);
$data = [
    'nickname'     => $nickname,
    'avatarNumber' => 5,
    'tagLine'      => 'a test dev!',
];

//1) POST to c reate the programmer
$response = $client->post('/api/programmers', [
    'body' => json_encode($data),
]);

//2)GET to fetch that programmer
$response = $client->get('/api/programmers/' . $nickname);

echo $response;