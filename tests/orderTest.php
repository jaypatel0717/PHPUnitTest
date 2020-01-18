<?php  

use PHPUnit\Framework\TestCase;

class orderTest extends TestCase{

    public function tearDown():void{
        Mockery::close();
    }

    // public function testOrderIsProcessed(){
    //     $gateway = $this->getMockBuilder('PaymentGateway')
    //                     ->setMethods(['charge'])
    //                     ->getMock();
    //     $gateway->expects($this->once())
    //             ->method('charge')
    //             ->with($this->equalTo(200))
    //             ->willReturn(true);

    //     $order = new order($gateway);
    //     $order->amount = 200;
    //     $this->assertTrue($order->process());
    // }

    // public function testOrderIsProcessedUsingMockery(){
    //     $gateway = Mockery::mock('PaymentGateway');
    //     $gateway->shouldReceive('charge')
    //             ->once()
    //             ->with(200)
    //             ->andReturn(true);
    //     $order = new order($gateway);
    //     $order->amount = 200;
    //     $this->assertTrue($order->process());
    // }

    public function testOrderIsProcessedUsingSpy(){
        $order = new order(3, 1.99);
        $this->assertEquals(5.97, $order->amount);
        $gateway_spy = Mockery::spy('PaymentGateway');
        $order->process1($gateway_spy);
        $gateway_spy->shouldHaveReceived('charge')
                    ->once()
                    ->with(5.97);
    }
}