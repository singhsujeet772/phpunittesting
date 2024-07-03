<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testReturnsFullName()
    { 
        $user = new User;                

        $user->first_name = "Teresa";
        $user->surname = "Green";
        
        $this->assertEquals('Teresa Green', $user->getFullName());        
    }
        
    public function testFullNameIsEmptyByDefault()
    {
        $user = new User;
        
        $this->assertEquals('', $user->getFullName());                    
    }

    /**
     * @test
     */
    public function user_name_check()
    {
        $user = new User;

        $user->surname = "Ramesh";
        
        $this->assertEquals('Ramesh', $user->getFullName());                    
    }
}