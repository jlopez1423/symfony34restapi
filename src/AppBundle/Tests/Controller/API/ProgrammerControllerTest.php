<?php

namespace AppBundle\Tests\Controller\API;

use AppBundle\Controller\Api\ProgrammerController;
use AppBundle\Test\ApiTestCase;
use GuzzleHttp\Client;

class ProgrammerControllerTest extends ApiTestCase
{
    public function testPOST()
    {
        $data = [
            'nickname'     => 'ObjectOrienter',
            'avatarNumber' => 5,
            'tagLine'      => 'a test dev!',
        ];

        $response = $this->client->post('/api/programmers', [
            'body' => json_encode($data),
        ]);

        $this->assertEquals(201, $response->getStatusCode());
        $this->assertEquals('/api/programmers/ObjectOrienter', $response->getHeader('Location'));
        $finishedData = json_decode($response->getBody(), true);
        $this->assertArrayHasKey('nickname', $finishedData);
        $this->assertEquals('ObjectOrienter', $data['nickname']);
    }
}
