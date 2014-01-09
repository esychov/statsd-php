<?php

require_once __DIR__ . '/../../../../lib/Statsd/Connection/Socket.php';

class SocketTest extends PHPUnit_Framework_TestCase
{
    public function testInit()
    {
        $connection = new StatsdSocket('localhost', 8125);
        $this->assertEquals('localhost', $connection->getHost());
        $this->assertEquals(8125, $connection->getPort());
    }

    public function testInitDefaults()
    {
        $connection = new StatsdSocket();
        $this->assertEquals('localhost', $connection->getHost());
        $this->assertEquals(8125, $connection->getPort());
        $this->assertFalse($connection->forceSampling());
    }
}
