<?php
declare(strict_types=1);

namespace selnew\alimq\Tests;

use PHPUnit\Framework\TestCase;

use selnew\alimq\Amqp;

final class AmqpTest extends TestCase
{
    public function testVersion()
    {
        $exp = new Amqp;

        // $this->expectOutputString($exp->show());
        // print $exp->show();

        $this->assertEquals('v1.0', $exp->version());
    }
}