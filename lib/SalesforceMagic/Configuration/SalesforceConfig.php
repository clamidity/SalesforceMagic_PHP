<?php

namespace Configuration;

/**
 * Class SalesforceConfig
 * Used to pass configuration details to the client
 *
 * @author Michael Shattuck
 * @package Configuration
 */
class SalesforceConfig
{
    private $salesforceSession;
    private $isSandbox;
    private $username;
    private $password;
    private $securityToken;
    private $sessionStore;

    /**
     * @return SalesforceSession
     */
    public function getSalesforceSession()
    {
        return $this->salesforceSession;
    }

    /**
     * @param SalesforceSession $salesforceSession
     */
    public function setSalesforceSession(SalesforceSession $salesforceSession)
    {
        $this->salesforceSession = $salesforceSession;
    }

    /**
     * @return bool
     */
    public function getIsSandbox()
    {
        return $this->isSandbox;
    }

    /**
     * @param bool $isSandbox
     * @throws \Exception
     */
    public function setIsSandbox($isSandbox)
    {
        if(!is_bool($isSandbox)) {
            throw new \Exception('$isSandbox must be a boolean');
        }

        $this->isSandbox = $isSandbox;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     * @throws \Exception
     */
    public function setUsername($username)
    {
        if(!is_string($username)) {
            throw new \Exception('$username must be a string;');
        }

        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     * @throws \Exception
     */
    public function setPassword($password)
    {
        if(!is_string($password)) {
            throw new \Exception('$password must be a string;');
        }

        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getSecurityToken()
    {
        return $this->securityToken;
    }

    /**
     * @param mixed $securityToken
     * @throws \Exception
     */
    public function setSecurityToken($securityToken)
    {
        if(!is_string($securityToken)) {
            throw new \Exception('$securityToken must be a string;');
        }

        $this->securityToken = $securityToken;
    }

    /**
     * @return SessionStoreInterface
     */
    public function getSessionStore()
    {
        return $this->sessionStore;
    }

    /**
     * @param SessionStoreInterface $sessionStore
     */
    public function setSessionStore(SessionStoreInterface $sessionStore)
    {
        $this->sessionStore = $sessionStore;
    }

} 