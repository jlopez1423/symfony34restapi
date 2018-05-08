<?php

namespace AppBundle\Test;

use Doctrine\Common\DataFixtures\Purger\ORMPurger;
use GuzzleHttp\Client;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ApiTestCase extends KernelTestCase
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

        self::bootKernel();
    }

    public function setup()
    {
        $this->client = self::$staticClient;
        $this->purgeDatabase();
    }

    public function tearDown()
    {
        // huh.
    }

    private function purgeDatabase()
    {
        $purger = new ORMPurger($this->getService('doctrine')->getManager());
        $purger->purge();
    }

    protected function getService($id)
    {
        return self::$kernel->getContainer()->get($id);
    }
}