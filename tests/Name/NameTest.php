<?php

class NameTest extends \PHPUnit\Framework\TestCase
{
    private $name;
    protected function setUp(): void {
        $this->name = new \App\Models\Name();  
    }
    protected function tearDown(): void {
        $this->name = NULL;
    }

    public function testGetName(){
        $db = mysqli_connect ("localhost:3308","root","", "shop");
        mysqli_query($db, "SET NAMES utf8");
        $result = $this->name->getName($db, 4); 
        $this->assertEquals("Какао", $result);
    }

}