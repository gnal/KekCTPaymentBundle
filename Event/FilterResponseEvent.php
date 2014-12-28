<?php

namespace Kek\CTPaymentBundle\Event;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class FilterResponseEvent extends Event
{
    private $response;
    private $request;
    private $transactionParams;

    public function __construct($transactionParams, Request $request, Response $response)
    {
        $this->response = $response;
        $this->request = $request;
        $this->transactionParams = $transactionParams;
    }

    public function getRequest()
    {
        return $this->request;
    }

    public function getTransactionParams()
    {
        return $this->transactionParams;
    }

    public function getResponse()
    {
        return $this->response;
    }

    public function setResponse(Response $response)
    {
        $this->response = $response;
    }
}
