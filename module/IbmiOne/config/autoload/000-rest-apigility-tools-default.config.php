<?php

return [
    'service_manager' => [
        'factories' => [
        ],
    ],
    'apigility-tools' => [
        'actuator-mapper' => [
            'mapper_default' => [
                'mapper_class'     => 'ApigilityTools\\Mapper\\Mapper',
                'mapper-listeners' => [
                    'ApigilityTools\\SqlActuator\\Listener\\CreateListener'=>'ApigilityTools\\SqlActuator\\Listener\\CreateListener',
                ],
                'disabled-mapper-listeners' => [
                    'ApigilityTools\\SqlActuator\\Listener\\Query\\InsertQueryListener'=>'ApigilityTools\\SqlActuator\\Listener\\Query\\InsertQueryListener',
                    'ApigilityTools\\SqlActuator\\Listener\\DeleteListener',
                    'ApigilityTools\\SqlActuator\\Listener\\Query\\DeleteQueryListener',
                    'ApigilityTools\\SqlActuator\\Listener\\UpdateListener',
                    'ApigilityTools\\SqlActuator\\Listener\\Query\\UpdateQueryListener',
                    'ApigilityTools\\SqlActuator\\Listener\\Feature\\SearchableListener' => 'ApigilityTools\\SqlActuator\\Listener\\Feature\\SearchableListener',
                    'ApigilityTools\\SqlActuator\\Listener\\Feature\\OrderableListener'  => 'ApigilityTools\\SqlActuator\\Listener\\Feature\\OrderableListener',
                    'ApigilityTools\\SqlActuator\\Listener\\Feature\\FilterTextListener' => 'ApigilityTools\\SqlActuator\\Listener\\Feature\\FilterTextListener',
                ],
            ],

        ],

    ],

];
