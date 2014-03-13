<?php
namespace Clem\TestCase;

use WebDriver\Client;

abstract class OurTestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \WebDriver\Browser
     */
    protected $browser;

    public function setUp()
    {
        $client  = new Client('http://localhost:8910');
        $this->browser = $client->createBrowser('firefox');
    }

    public function tearDown()
    {
        $this->browser->close();
    }
}
