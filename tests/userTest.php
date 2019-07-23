<?php


use PHPUnit\Framework\TestCase;

class userTest extends TestCase{
    public function testReturnFullName(){
    
        $user = new user;

        $user->first_name = "Jay";
        $user->last_name = "Patel";
        $this->assertEquals('Jay Patel', $user->getFullName());
    }

    public function testFullNameIsEmptyByDefault(){
        $user = new user;
        $this->assertEquals('', $user->getFullName());
    }

    public function testNotificationIsSent(){
        $user = new user;
        $mock_mailer = $this->createMock(mailer::class);
        $mock_mailer->expects($this->once())
                    ->method('sendMessage')
                    ->with($this->equalTo('fek420@gmail.com'), $this->equalTo('Hello'))
                    ->willReturn(true);
        $user->setMailer($mock_mailer);
        $user->email = 'fek420@gmail.com';
        $this->assertTrue($user->notify("Hello"));
    }

    public function testCannotNotifyUserWithNoEmail(){
        $user = new user;
        $mock_mailer = $this->getMockBuilder(mailer::class)
                            ->setMethods(null)
                            ->getMock();
        
        $user->setMailer($mock_mailer);
        $this->expectException(Exception::class);
        $user->notify("Hello");
    }
}
