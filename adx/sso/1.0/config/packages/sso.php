<?php

$container->loadFromExtension('sso', [
    'desarrolla_cache_config' => [
        'default_ttl' => 3600,
        'driver'      => 'file',
        'notcache'    => [
            // config for not cache
        ],
        'file'        => [
            'cache_dir' => $_ENV['CACHE_DIR'],
        ],
        'apc'         => [
            // config for apc
        ],
        'memory'      => [
           'limit' => 1000,
        ],
        'mongo'       => [
            'server' => 'mongodb://localhost:27017',
        ],
        'mysql'       => [
            'host'     => '127.0.0.1',
            'username' => 'root',
            'password' => '',
            'dbname'   => '',
            'port'     => 3306
        ],
        'redis'       => [
            // config for redis
        ],
        'memcache'    => [
            'servers' => [
                'localhost'
            ]
        ]
    ]
]);
