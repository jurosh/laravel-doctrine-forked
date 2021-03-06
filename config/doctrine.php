<?php

return [
    'metadata' => [
        'driver' => 'annotation',
        'simple' => false
    ],

    'proxy' => [
        'auto_generate' => false,
        'directory'     => null,
        'namespace'     => null
    ],

    // Available: null, apc, xcache, redis, memcache
    'cache_provider' => null,

    'cache' => [
        'redis' => [
            'host'     => '127.0.0.1',
            'port'     => 6379,
            'database' => 1
        ],
        'memcache' => [
            'host' => '127.0.0.1',
            'port' => 11211
        ]
    ],

    'repository' => 'Doctrine\ORM\EntityRepository',

    'repositoryFactory' => null,

    'logger' => null,

    'dql' => null,

    'migrations' => [
        'directory' => base_path('database/doctrine/migrations'),
        'namespace' => 'App\Migrations'
    ]
];
