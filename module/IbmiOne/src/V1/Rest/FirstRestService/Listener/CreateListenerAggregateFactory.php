<?php

namespace IbmiOne\V1\Rest\FirstRestService\Listener;

use Interop\Container\ContainerInterface;
use OrdiniProduzione\V1\Rest\OrdiniProduzione\Listener\MapperCreateUpdateListenerAggregate;
use Zend\Filter\Word\UnderscoreToCamelCase;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;
use Zend\ServiceManager\Factory\FactoryInterface;

class CreateListenerAggregateFactory
    implements FactoryInterface
{


    /**
     * @param \Interop\Container\ContainerInterface $container
     * @param string                                $requestedName
     * @param array|null                            $options
     *
     * @return \ApigilityTools\Rest\Resource\ResourceListener|object
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {

        $pgmCall= $container->get('Application\\MyPgmCallExample');
        $listener=new CreateListenerAggregate($pgmCall);
        return $listener;
    }



}
