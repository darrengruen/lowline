<?php
namespace dgruen\LowLine\tests\funcs;

use dgruen\Tests\LowLine\funcs\AbstractTraitTest as BaseTest;

class TestTraitTest extends BaseTest
{
    const TRAIT_NAME = 'TestTrait';

    /***************************************************************************
     * Tests
     **************************************************************************/

     /**
      * @covers _::isObject
      */
    public function testIsObjectNoObject()
    {
        $this->assertTrue(! $this->traitObject->isObject("string"));
        $this->assertTrue($this->traitObject->isObject(new \StdClass));
    }

    /**
     * @covers _::isNumeric
     */
    public function testIsNumeric()
    {
        $this->assertTrue(
            $this->traitObject->isNumeric(2)
        );
        $this->assertTrue(
            ! $this->traitObject->isNumeric("hello")
        );
        $this->assertTrue(
            $this->traitObject->isNumeric("25")
        );
    }
}
