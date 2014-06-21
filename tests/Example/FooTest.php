<?php

use Example\Foo;

class FooTest extends PHPUnit_Framework_TestCase
{
    public function testBar()
    {
        $foo = new Foo();
        $this->assertEquals('bar', $foo->bar());
    }
}
