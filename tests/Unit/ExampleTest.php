<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $foo="bar";

        $this->assertTrue(true);
    }

    public function it_load_the_page()
    {
        $this->get('/')->assertSee(About);
    }
}
