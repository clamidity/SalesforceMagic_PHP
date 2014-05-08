<?php

use Configuration\SalesforceConfig;
use Http\HttpClient;

/**
 * Class SalesforceClient
 *
 * @author Michael Shattuck
 */
class SalesforceClient
{
    /**
     * @var Configuration\SalesforceConfig
     */
    private $config;

    /**
     * @var bool
     */
    private $autoLogin;

    /**
     * @var HttpClient
     */
    private $httpClient;

    /**
     * @param SalesforceConfig $config
     * @param Http\HttpClient $client
     * @param bool $autoLogin
     */
    public function __construct(SalesforceConfig $config, HttpClient $client = null, $autoLogin = false)
    {
        $this->config = $config;
        $this->autoLogin = $autoLogin;
        $this->httpClient = $client != null ? $client : new HttpClient();
    }

    /**
     * @return \Configuration\SalesforceSession
     */
    public function login()
    {
        if (null != $this->config->getSalesforceSession()) {
            return $this->config->getSalesforceSession();
        }

        // TODO: login
    }
}