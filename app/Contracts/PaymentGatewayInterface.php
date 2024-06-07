<?php

namespace App\Contracts;

interface PaymentGatewayInterface
{
    public function processPayment($order_id,$amount,$txn_id);
}