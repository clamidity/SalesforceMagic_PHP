<?php

namespace Http;

use HttpRequest;

/**
 * Class HttpClient
 *
 * @author Michael Shattuck
 * @package Http
 */
class HttpClient
{
    /**
     * @param \HttpRequest $request
     * @return null
     */
    public function performRequest(HttpRequest $request)
    {
        try {
            $response = $request->send();

            if ($response->getResponseCode() == 200) {
                return null; // TODO: Begin response parsing
            }

            // TODO: Possibly add check for unauthorized and throw more specific error

            throw new \HttpException($response->getResponseStatus());
        } catch(\HttpException $e) {

        }
    }
} 