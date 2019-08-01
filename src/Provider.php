<?php

namespace Nelsonzabala\Container;

abstract class Provider
{
    /**
     * @var Container
     */
    protected $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    abstract public function register();

}