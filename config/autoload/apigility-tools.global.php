<?php

return [
    'apigility-tools' => [
        'actuator-mapper' => [
            'mapper_default' => [
                'composite_key'        => false,
                'mapper_class'         => 'ApigilityTools\\Mapper\\Mapper',
                'identifier_delimiter' => '_',
                'mapper-listeners'     => [
                    'ApigilityTools\\SqlActuator\\Listener\\FetchListener'                                   => 'ApigilityTools\\SqlActuator\\Listener\\FetchListener',
                    'ApigilityTools\\SqlActuator\\Listener\\FetchAllListener'                                => 'ApigilityTools\\SqlActuator\\Listener\\FetchAllListener',
                    //                    'ApigilityTools\\SqlActuator\\Listener\\CreateListener'                 => 'ApigilityTools\\SqlActuator\\Listener\\CreateListener',
                    //                    'ApigilityTools\\SqlActuator\\Listener\\UpdateListener'                 => 'ApigilityTools\\SqlActuator\\Listener\\UpdateListener',
                    //                    'ApigilityTools\\SqlActuator\\Listener\\DeleteListener'                 => 'ApigilityTools\\SqlActuator\\Listener\\DeleteListener',
                    'ApigilityTools\\SqlActuator\\Listener\\Query\\ConstraintWhereListener'                  => 'ApigilityTools\\SqlActuator\\Listener\\Query\\ConstraintWhereListener',
                    'ApigilityTools\\SqlActuator\\Listener\\Query\\SelectQueryListener'                      => 'ApigilityTools\\SqlActuator\\Listener\\Query\\SelectQueryListener',
                    /**
                     *
                     * listener facoltativi, da attivare solo se necessari
                     *
                     * 'ApigilityTools\\SqlActuator\\Listener\\Query\\UpdateQueryListener'=>'ApigilityTools\\SqlActuator\\Listener\\Query\\UpdateQueryListener',
                     * 'ApigilityTools\\SqlActuator\\Listener\\Query\\DeleteQueryListener'=>'ApigilityTools\\SqlActuator\\Listener\\Query\\DeleteQueryListener',
                     * 'ApigilityTools\\SqlActuator\\Listener\\Query\\InsertQueryListener'=>'ApigilityTools\\SqlActuator\\Listener\\Query\\InsertQueryListener',
                     */
                    'ApigilityTools\\SqlActuator\\Listener\\Query\\RunQueryListener'                         => 'ApigilityTools\\SqlActuator\\Listener\\Query\\RunQueryListener',
                    'ApigilityTools\\SqlActuator\\Hydrator\\HydratorDbResultListener'                        => 'ApigilityTools\\SqlActuator\\Hydrator\\HydratorDbResultListener',
                    'ApigilityTools\\SqlActuator\\Listener\\Feature\\PaginatorListener'                      => 'ApigilityTools\\SqlActuator\\Listener\\Feature\\PaginatorListener',
                    /**
                     *
                     * listener per la selezione delle risorse
                     * se la risosrsa è identificata da chiave composita usare in alternativa
                     *
                     * 'ApigilityTools\\SqlActuator\\Listener\\Query\\WhereKeysListener'=>'ApigilityTools\\SqlActuator\\Listener\\Query\\WhereKeysListener',
                     *
                     */
                    'ApigilityTools\\SqlActuator\\Listener\\Query\\WhereIdListener'                          => 'ApigilityTools\\SqlActuator\\Listener\\Query\\WhereIdListener',
                    'ApigilityTools\\SqlActuator\\Hydrator\\HydratorPreLimitedDbResultsetCollectionListener' => 'ApigilityTools\\SqlActuator\\Hydrator\\HydratorPreLimitedDbResultsetCollectionListener',
                    'ApigilityTools\\SqlActuator\\Listener\\Query\\CountAffectedQueryListener'               => 'ApigilityTools\\SqlActuator\\Listener\\Query\\CountAffectedQueryListener',
                    /**
                     *
                     * listener per funzionalità varie
                     *
                     * 'ApigilityTools\\SqlActuator\\Listener\\Feature\\SqlSearchableListener'=>'ApigilityTools\\SqlActuator\\Listener\\Feature\\SqlSearchableListener',
                     * 'ApigilityTools\\SqlActuator\\Listener\\Feature\\SqlOrderableListener'=>'ApigilityTools\\SqlActuator\\Listener\\Feature\\SqlOrderableListener',
                     * 'ApigilityTools\\SqlActuator\\Listener\\Feature\\SqlFilterTextListener'=>'ApigilityTools\\SqlActuator\\Listener\\Feature\\SqlFilterTextListener',
                     * 'ApigilityTools\\SqlActuator\\Listener\\Feature\\SoftDeleteListener'=>'ApigilityTools\\SqlActuator\\Listener\\Feature\\SoftDeleteListener',
                     */
                ],
            ],
        ],
    ],
    'caches'          => [
        'apigility_tools_model_cache' => [
            'adapter' => [
                'name'    => 'filesystem',
                'options' => [
                    'cache_dir' => __DIR__ . '/../../../data/cache',
                    'ttl'       => 3600,
                ],
            ],
            'plugins' => [
                'serializer' => [],
            ],
        ],
    ],
];
