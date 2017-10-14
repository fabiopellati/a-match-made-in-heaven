<?php
namespace IbmiOne\V1\Rest\FirstRestService;

class FirstRestServiceResourceFactory
{
    public function __invoke($services)
    {
        return new FirstRestServiceResource();
    }
}
