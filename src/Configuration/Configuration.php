<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\MicroConfig\Configuration;

use Exception;

class Configuration
{
    private static array $config = [];

    /**
     * Retrieve a configuration value.
     *
     * @param string $key
     *
     * @return mixed
     *
     * @throws Exception
     */
    public static function get(string $key): mixed
    {
        if (!isset(static::$config[$key])) {
            throw new Exception(
                sprintf(
                    'Configuration with key %s not found!',
                    $key
                )
            );
        }

        return static::$config[$key];
    }

    /**
     * Set a configuration entry.
     *
     * @param string $key
     * @param mixed $value
     *
     * @return void
     */
    public static function set(string $key, mixed $value)
    {
        static::$config[$key] = $value;
    }
}