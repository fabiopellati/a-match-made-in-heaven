<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c] 2014-2016 Zend Technologies USA Inc. (http://www.zend.com]
 */

return [
    'service_manager' => [
        'factories' => [
            'ZF\Configuration\ConfigWriter'=>\ApigilityTools\Config\Writer\ConfigWriterFactory::class,
            'ZF\Configuration\ConfigResourceFactory' => \ApigilityTools\Config\ResourceFactoryFactory::class
        ],
    ],
];
