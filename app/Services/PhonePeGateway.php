<?php

namespace App\Services;

use App\Contracts\PaymentGatewayInterface;

class PhonePeGateway implements PaymentGatewayInterface
{
    public function processPayment($order_id,$amount,$txn_id)
    {
        // Process the payment using PhonePe payment gateway
        return "Payment of Rs. ".$amount." for order ".$order_id." processed successfully using PhonePe payment gateway. Transaction ID: ".$txn_id;
    }
}