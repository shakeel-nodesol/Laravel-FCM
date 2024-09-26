<?php

namespace LaravelFCM\Response\Exceptions;

use Exception;
use Psr\Http\Message\ResponseInterface;

/**
 * Class UnauthorizedRequestException.
 */
class UnauthorizedRequestException extends Exception
{
    /**
     * UnauthorizedRequestException constructor.
     *
     * @param \Psr\Http\Message\ResponseInterface $response
     */
    public function __construct(ResponseInterface $response)
    {
        $code = $response->getStatusCode();

        parent::__construct('invalid FCM_ACCESS_TOKEN', $code);
    }
}
