<?php
namespace IbmiOne;

use Zend\Stdlib\ArrayUtils;
use ZF\Apigility\Provider\ApigilityProviderInterface;

class Module implements ApigilityProviderInterface
{
    public function getConfig()
    {
        $module = include __DIR__ . '/config/module.config.php';
        $Directory = new \RecursiveDirectoryIterator(__DIR__ . '/config/autoload');
        $Iterator = new \RecursiveIteratorIterator($Directory);
        $Regex = new \RegexIterator($Iterator, '/^.+\/autoload\/.+\.config.php$/i',
                                    \RecursiveRegexIterator::GET_MATCH);
        $autoloadConfig = [];
        foreach ($Regex as $file) {
            $fileConfig = include $file[0];
            $autoloadConfig = ArrayUtils::merge($autoloadConfig, $fileConfig);
        }
        $config = ArrayUtils::merge($module, $autoloadConfig);

        return $config;
    }

    public function getAutoloaderConfig()
    {
        return [
            'ZF\Apigility\Autoloader' => [
                'namespaces' => [
                    __NAMESPACE__ => __DIR__ . '/src',
                ],
            ],
        ];
    }
}
