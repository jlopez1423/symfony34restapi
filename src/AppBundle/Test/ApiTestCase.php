<?php

namespace AppBundle\Test;

use GuzzleHttp\Client;

class ApiTestCase extends \PHPUnit_Framework_TestCase
{
    private static $staticClient;

    /**
     * @var Client
     */
    protected $client;

    public static function setUpBeforeClass()
    {
        self::$staticClient = new Client([
            'base_url' => 'http://symfonyrestapi.l',
            'defaults' => [
                'exceptions' => false,
            ],
        ]);
    }

    public function setup()
    {
        $this->client = self::$staticClient;
    }

}