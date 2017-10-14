<?php
/**
 * lo scopo di questo listener è quello di disaccoppiare la logica di filtraggio dell'id
 * per SELECT, UPDATE, DELETE
 *
 * per consentire di manipolare l'id filtrato prima dell'esecuzione della query nel caso ad esempio delle chiavi
 * composite
 *
 *
 */

namespace IbmiOne\V1\Rest\FirstRestService\Listener;

use ApigilityTools\Mapper\Mapper;
use MessageExchangeEventManager\Actuator\Actuator;
use MessageExchangeEventManager\Event\EventInterface;
use MessageExchangeEventManager\Event\MessageExchangeEventInterface;
use MessageExchangeEventManager\EventManagerAwareTrait;
use Zend\EventManager\AbstractListenerAggregate;
use Zend\EventManager\EventManagerAwareInterface;
use Zend\EventManager\EventManagerInterface;
use ZF\ApiProblem\ApiProblem;

class CreateListenerAggregate
    extends AbstractListenerAggregate
{

    /**
     * @var Actuator
     */
    protected $pgmCall;

    /**
     * MapperCreateListenerAggregate constructor.
     *
     * @param Actuator $pgmCall
     */
    public function __construct(Actuator $pgmCall)
    {
        $this->pgmCall = $pgmCall;
    }


    /**
     * Attach one or more listeners
     *
     * Implementors may add an optional $priority argument; the EventManager
     * implementation will pass this to the aggregate.
     *
     *
     * @param EventManagerInterface $events
     * @param int                   $priority
     *
     * @return void
     */
    public function attach(EventManagerInterface $events, $priority = 100)
    {

        $this->listeners[] = $events->attach(Mapper::EVENT_MAPPER_CREATE, [$this, 'onEvent'],
                                             $priority);
    }

    /**
     *
     * @return \MessageExchangeEventManager\Response\Response
     */
    public function onEvent(EventInterface $e)
    {
        try {
            $request = $e->getRequest();
            $response = $e->getResponse();
            $data = $request->getParameters()->get('data');
            /**
             * @var \MessageExchangeEventManager\Resultset\ResultsetInterface
             */
            $resultset = $this->pgmCall->run($data);
            $result = $resultset->fetchAll();
            $keyOne = $result['io_param']['key_one'];
            $keyTwo = $result['io_param']['key_two'];
            $lastId = "{$keyOne}_{$keyTwo}";
            $response->setContent($lastId);

        } catch (\Exception $error) {

            $content = new ApiProblem($error->getCode(), $error->getMessage());
            $response->setContent($content);
            $e->stopPropagation();
        }

        return $response;
    }

}
