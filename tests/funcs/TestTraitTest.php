<?php
namespace dgruen\LowLine\tests\funcs;

use dgruen\Tests\LowLine\funcs\AbstractTraitTest as BaseTest;

class TestTraitTest extends BaseTest
{
    const TRAIT_NAME = 'TestTrait';

    /***************************************************************************
     * Tests
     **************************************************************************/

     /** @covers LowLine::isObject */
    public function testIsObjectNoObject()
    {
        $this->assertTrue(! $this->traitObject->isObject("string"));
        $this->assertTrue($this->traitObject->isObject(new \StdClass));
    }

    /** @covers LowLine::isNumeric */
    public function testIsNumeric()
    {
        $this->assertTrue($this->traitObject->isNumeric(2));
        $this->assertTrue(! $this->traitObject->isNumeric("hello"));
        $this->assertTrue($this->traitObject->isNumeric("25"));
    }

    /** @covers LowLine::isString */
    public function testIsString()
    {
        $this->assertTrue($this->traitObject->isString('string'));
        $this->assertNotTrue($this->traitObject->isString(46));
        $func = function () {
            return;
        };
        $this->assertNotTrue($this->traitObject->isString($func));
        $this->assertNotTrue($this->traitObject->isString(null));
    }
}
