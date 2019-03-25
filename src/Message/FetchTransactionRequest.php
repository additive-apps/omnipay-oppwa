<?php

namespace Omnipay\Oppwa\Message;

class FetchTransactionRequest extends AbstractRequest
{
    public function getData()
    {
        $this->validate('transactionReference');

        return array();
    }

    protected function getHttpMethod()
    {
        return 'GET';
    }

    protected function getEndpoint()
    {
        return parent::getEndpoint() . '/checkouts/' . $this->getTransactionReference().'/payment';
    }
}
