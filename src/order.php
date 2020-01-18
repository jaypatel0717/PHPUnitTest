<?php

class order{
    public $amount;
    public $quentity;
    public $unit_price;
    

    protected $geteway;

    // public function __construct1(PaymentGateway $gateway){
    //     $this->gateway = $gateway;
    // }

    public function process(){
        return $this->gateway->charge($this->amount);
    }

    public function __construct(int $quentity, float $unit_price){
        $this->quantity = $quentity;
        $this->unit_price = $unit_price;
        $this->amount = $quentity * $unit_price;
    }

    public function process1(PaymentGateway $gateway){
        $gateway->charge($this->amount);
    }
}   