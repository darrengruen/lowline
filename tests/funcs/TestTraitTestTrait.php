<?php
namespace dgruen\Tests\LowLine\funcs;

trait TestTraitTestTrait
{
    /**
     * @covers dgruen\LowLine\LowLine::isObject
     */
    public function testIsObjectNoObject()
    {
        $this->assertTrue(! $this->object->isObject("string"));
        $this->assertTrue($this->object->isObject(new \StdClass));
    }

    /**
     * @covers dgruen\LowLine\LowLine::isNumeric
     */
    public function testIsNumeric()
    {
        $this->assertTrue($this->object->isNumeric(2));
        $this->assertTrue(! $this->object->isNumeric("hello"));
        $this->assertTrue($this->object->isNumeric("25"));
    }

    /** @covers dgruen\LowLine\LowLine::isString */
    public function testIsString()
    {
        $this->assertTrue($this->object->isString('string'));
        $this->assertNotTrue($this->object->isString(46));
        $func = function () {
            return;
        };
        $this->assertNotTrue($this->object->isString($func));
        $this->assertNotTrue($this->object->isString(null));
    }

    /** @covers dgruen\LowLine\LowLine::isCallable */
    public function testIsCallable()
    {
        $func = function () {
            return null;
        };
        $this->assertTrue($this->object->isCallable($func));
        $this->assertNotTrue($this->object->isCallable(35665));
    }
}
