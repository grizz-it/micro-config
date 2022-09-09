<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\MicroConfig\Tests\Configuration;

use Exception;
use GrizzIt\MicroConfig\Configuration\Configuration;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \GrizzIt\MicroConfig\Configuration\Configuration
 */
class ConfigurationTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::get
     * @covers ::set
     *
     * @throws Exception
     */
    public function testConfiguration(): void
    {
        Configuration::set('foo', 'bar');
        $this->assertEquals(Configuration::get('foo'), 'bar');

        // Should fail, doesn't exist.
        $this->expectException(Exception::class);
        Configuration::get('bar');
    }
}