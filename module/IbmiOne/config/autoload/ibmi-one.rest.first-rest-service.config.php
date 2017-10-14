<?php
return [
    'router' => [
        'routes' => [
            'ibmi-one.rest.first-rest-service' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/first-rest-service[/:first_rest_service_id]',
                    'defaults' => [
                        'controller' => 'IbmiOne\\V1\\Rest\\FirstRestService\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => 'ibmi-one.rest.first-rest-service',
    ],
    'zf-rest' => [
        'IbmiOne\\V1\\Rest\\FirstRestService\\Controller' => [
            'listener' => \IbmiOne\V1\Rest\FirstRestService\FirstRestServiceResource::class,
            'route_name' => 'ibmi-one.rest.first-rest-service',
            'route_identifier_name' => 'first_rest_service_id',
            'collection_name' => 'first_rest_service',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
            ],
            'collection_http_methods' => [
                0 => 'POST',
                1 => 'GET',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \IbmiOne\V1\Rest\FirstRestService\FirstRestServiceEntity::class,
            'collection_class' => \IbmiOne\V1\Rest\FirstRestService\FirstRestServiceCollection::class,
            'service_name' => 'FirstRestService',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'IbmiOne\\V1\\Rest\\FirstRestService\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'IbmiOne\\V1\\Rest\\FirstRestService\\Controller' => [
                0 => 'application/vnd.ibmi-one.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'IbmiOne\\V1\\Rest\\FirstRestService\\Controller' => [
                0 => 'application/vnd.ibmi-one.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \IbmiOne\V1\Rest\FirstRestService\FirstRestServiceEntity::class => [
                'entity_identifier_name' => 'key_one__key_two',
                'route_name' => 'ibmi-one.rest.first-rest-service',
                'route_identifier_name' => 'first_rest_service_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \IbmiOne\V1\Rest\FirstRestService\FirstRestServiceCollection::class => [
                'entity_identifier_name' => 'key_one__key_two',
                'route_name' => 'ibmi-one.rest.first-rest-service',
                'route_identifier_name' => 'first_rest_service_id',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-content-validation' => [
        'IbmiOne\\V1\\Rest\\FirstRestService\\Controller' => [
            'input_filter' => 'IbmiOne\\V1\\Rest\\FirstRestService\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'IbmiOne\\V1\\Rest\\FirstRestService\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'key_one',
            ],
            1 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'key_two',
            ],
            2 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'first_name',
            ],
            3 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'last_name',
            ],
        ],
    ],
];
