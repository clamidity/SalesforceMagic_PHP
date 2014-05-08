<?php

namespace Configuration;

/**
 * Interface SessionStoreInterface
 *
 * @author Michael Shattuck
 * @package Configuration
 */
interface SessionStoreInterface
{
    /**
     * @param string $environment
     * @return SalesforceSession
     */
    function retrieveSession($environment);

    /**
     * @param SalesforceSession $session
     * @return bool
     */
    function storeSession(SalesforceSession $session);

    /**
     * @param string $environment
     * @return bool
     */
    function sessionExists($environment);
}