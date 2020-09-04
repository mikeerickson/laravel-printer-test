<?php

namespace Tests\Unit;

use Tests\CreatesApplication;
use Illuminate\Foundation\Testing\TestCase; // here

class ExampleTest extends TestCase
{
    use CreatesApplication;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    /** @test  */
    public function should_pass()
    {
        $this->assertTrue(true);
    }

    /** @test  */
    public function should_pass_again()
    {
        $this->assertTrue(true);
    }

}
