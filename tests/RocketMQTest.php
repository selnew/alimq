<?php
declare(strict_types=1);

namespace selnew\alimq\Tests;

use PHPUnit\Framework\TestCase;

use selnew\alimq\RocketMQ;

final class RocketMQTest extends TestCase
{
    public function testVersion()
    {
        $exp = new RocketMQ;

        // $this->expectOutputString($exp->show());
        // print $exp->show();

        $this->assertEquals('v1.0', $exp->version());
    }
}