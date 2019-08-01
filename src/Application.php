<?php

namespace Nelsonzabala\Container;

class Application
{

    /**
     * @var Container
     */
    protected $container;

    /**
     * Application constructor
     * 
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    /**
     * Register the providers
     * 
     * @param array $providers
     */
    public function registerProviders(array $providers)
    {
        foreach ($providers as $provider)
        {
            $provider = new $provider($this->container);
            $provider->register();
        }
    }
}



