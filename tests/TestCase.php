<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    //
}
namespace Tests;



class MyTest extends TestCase {
    public function testExample() {
        $this->assertTrue(true);
    }
}

