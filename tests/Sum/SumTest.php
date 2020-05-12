<?php

class SumTest extends \PHPUnit\Framework\TestCase
{
    private $sum;
    protected function setUp(): void {
        $this->sum = new \App\Models\Sum();  
    }
    protected function tearDown(): void {
        $this->sum = NULL;
    }

    /**
     * @dataProvider sumProvider
     */
    public function testAdd($sum){
        $result = $this->sum->add(1, 2); 
        $this->assertEquals($sum, $result);
    }
    public function sumProvider() {
        return [
            [3],
            [3],
        ];
    }
}