<?php  

use PHPUnit\Framework\TestCase;

class phptestExample extends TestCase{
    /** @test */
    public function testAddReturnsTheCorrectSum(){
        $this->assertEquals(5, add(2, 2));
    }
}