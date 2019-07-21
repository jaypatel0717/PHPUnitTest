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
}
