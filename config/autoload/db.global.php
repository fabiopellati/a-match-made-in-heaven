<?php
return [
    'db' => [
        'driver'   => 'Pdo_Sqlite',
        'database' => __DIR__ . '/../../data/sample_sqlite.db',
        'adapters' => [
            'Application\\DB\\MatchMadeInHeavenAdapter' => [
                'driver'   => 'Pdo_Sqlite',
                'database' => __DIR__ . '/../../data/sample_sqlite.db',
            ],
        ],
    ],
];