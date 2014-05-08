<?php

namespace Configuration;

/**
 * Class SalesforceSession
 *
 * @author Michael Shattuck
 * @package Configuration
 */
class SalesforceSession
{
    private $sessionId;
    private $instanceUrl;
    private $environment;
    private $isSandbox;
    private $lastLogin;

    /**
     * @return mixed
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * @param mixed $sessionId
     * @throws \Exception
     */
    public function setSessionId($sessionId)
    {
        if (!is_string($sessionId)) {
            throw new \Exception('$sessionId must be a string;');
        }

        $this->sessionId = $sessionId;
    }

    /**
     * @return mixed
     */
    public function getInstanceUrl()
    {
        return $this->instanceUrl;
    }

    /**
     * @param mixed $instanceUrl
     * @throws \Exception
     */
    public function setInstanceUrl($instanceUrl)
    {
        if (!is_string($instanceUrl)) {
            throw new \Exception('$username must be a string;');
        }

        $this->instanceUrl = $instanceUrl;
    }

    /**
     * @return mixed
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * @param mixed $environment
     * @throws \Exception
     */
    public function setEnvironment($environment)
    {
        if (!is_string($environment)) {
            throw new \Exception('$environment must be a string;');
        }

        $this->environment = $environment;
    }

    /**
     * @return mixed
     */
    public function getIsSandbox()
    {
        return $this->isSandbox;
    }

    /**
     * @param mixed $isSandbox
     * @throws \Exception
     */
    public function setIsSandbox($isSandbox)
    {
        if (!is_bool(@$isSandbox)) {
            throw new \Exception("$isSandbox must be a boolean");
        }

        $this->isSandbox = $isSandbox;
    }

    /**
     * @return \DateTime
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * @param \DateTime $lastLogin
     */
    public function setLastLogin(\DateTime $lastLogin)
    {
        $this->lastLogin = $lastLogin;
    }
} 