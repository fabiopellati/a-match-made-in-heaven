<?php
return [
    'service_manager' => [
        'factories' => [
            'Application\\MyPgmCallExample'       => 'IbmiTools\\PgmCallActuatorFactory',
            'IbmiTools\\ToolkitInstance\\Default' => 'IbmiTools\\ToolkitInstance\\FakeToolkitInstanceFactory',
        ],
    ],
    'ibmi-tools'      => [
        'toolkit-instance' => [
            'IbmiTools\\ToolkitInstance\\Default' => [
                'database' => '*LOCAL',
                'user'     => 'QPGMR',
                'password' => 'aaa',
            ],
        ],
        'pgm-call'         => [
            'Application\\MyPgmCallExample' => [
                'listeners'=>[],
                'library-name' => 'W2WSTD_OBJ',
                'program-name' => 'PGMEX00',
                'params'       => [
                    'key_one' => [
                        'name'    => 'key_one',
                        'type'    => '8P 0',
                        'comment' => 'key one',
                        'io'      => 'I',
                    ],
                    'key_two' => [
                        'name'    => 'key_two',
                        'type'    => '8P 0',
                        'comment' => 'key one',
                        'io'      => 'I',
                    ],
                    'first_name' => [
                        'name'    => 'first_name',
                        'type'    => '100A',
                        'comment' => 'first name',
                        'io'      => 'I',
                    ],
                    'last_name' => [
                        'name'    => 'last_name',
                        'type'    => '100A',
                        'comment' => 'last name',
                        'io'      => 'I',
                    ],
                ],
            ],
        ],
    ],
];