<?php  

use PHPUnit\Framework\TestCase;

class phptestExample extends TestCase{
    /** @test */

    public function testAddReturnsTheCorrectSum(){
        require 'functions.php';
        $this->assertEquals(4, add(2, 2));
        $this->assertEquals(8, add(4, 4));
    }

    public function testAddDoesNotReturnTheIncorrectSum(){
        $this->assertNotEquals(5, add(2, 2));
    }
}