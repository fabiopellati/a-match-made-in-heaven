<?php

namespace IbmiOne\V1\Rest\FirstRestService;


return [
    'service_manager' => [
        'factories' => [
            __NAMESPACE__ .
            '\\FirstRestServiceResource'                                 => \ApigilityTools\Rest\Resource\ResourceListenerFactory::class,
            __NAMESPACE__ .
            '\\Mapper'                                                     => \ApigilityTools\Mapper\MapperFactory::class,
            __NAMESPACE__ .
            '\\FirstRestServiceEntity'                                   => \ApigilityTools\Rest\Entity\EventAwareEntityFactory::class,
            __NAMESPACE__ . '\\Listener\\CreateListenerAggregate' =>
                __NAMESPACE__ . '\\Listener\\CreateListenerAggregateFactory',
        ],
    ],
    'apigility-tools' => [
        'actuator-mapper' => [
            __NAMESPACE__ . '\\FirstRestServiceResource' => [
                'mapper_class' => __NAMESPACE__ . '\\Mapper',
            ],
            __NAMESPACE__ . '\\Mapper'                     => [
                'identifier_delimiter' => '__',
                'namespace'            => __NAMESPACE__,
                'db_adapter'           => 'Application\\DB\\MatchMadeInHeavenAdapter',
                'db_schema'            => 'main',
                'db_table'             => 'match_made_in_heaven',
                'columns'              => [
                    'key_one',
                    'key_two',
                    'first_name',
                    'last_name',
                ],
                'mapper-listeners'     => [
                    'ApigilityTools\\SqlActuator\\Listener\\Query\\ColumnsListener' =>
                        'ApigilityTools\\SqlActuator\\Listener\\Query\\ColumnsListener',
                    'ApigilityTools\\Mapper\\Listener\\ComposedKeysListener'        =>
                        'ApigilityTools\\Mapper\\Listener\\ComposedKeysListener',
                    'ApigilityTools\\SqlActuator\\Listener\\Query\\WhereIdListener' =>
                        'ApigilityTools\\SqlActuator\\Listener\\Query\\WhereKeysListener',
                    'ApigilityTools\\SqlActuator\\Listener\\CreateListener'  =>
                        __NAMESPACE__ . '\\Listener\\CreateListenerAggregate',
                ],
            ],
            __NAMESPACE__ . '\\FirstRestServiceEntity'   => [
                'identifier_delimiter' => '__',
                'entity-listeners'     => [
                    'ApigilityTools\Rest\Entity\Listener\CompositeKeysListenerAggregate' => 'ApigilityTools\Rest\Entity\Listener\CompositeKeysListenerAggregate',
                ],
            ],
        ],
    ],
];
