<?php  

use PHPUnit\Framework\TestCase;

class mockTest extends TestCase{
    public function testMock(){
        $mock = $this->createMock(mailer::class);
        $mock->method('sendMessage')
             ->willReturn(true);
        $result = $mock->sendMessage('fek420@gmail.com', 'hello');
        $this->assertTrue($result);
    }
}