<?php

class order{
    public $amount = 0;

    protected $geteway;

    public function __construct(PaymentGateway $gateway){
        $this->gateway = $gateway;
    }

    public function process(){
        return $this->gateway->charge($this->amount);
    }
}