<?php
namespace dgruen\Tests\LowLine\funcs;

use dgruen\LowLine;
use dgruen\Tests\LowLine\funcs\AbstractTraitTest as BaseTest;

class StringTraitTest extends BaseTest
{
    const TRAIT_NAME = 'StringTrait';

    /**********************************************************************
     * TESTS
     **********************************************************************/

    /** @covers LowLine::stringReverse */
    public function testStringReverse()
    {
        $str    = 'abcde';
        $strRes = 'edcba';
        $this->assertEquals($this->traitObject->stringReverse($str), $strRes);
        $num = 456;
        $numRes = 654;
        $this->assertEquals($this->traitObject->stringReverse($num), $numRes);
    }

    public function testStringRandomize()
    {
        $message = 'failed with %s input and %s output';
        $str1 = 'hello world';
        $str2 = 'h';
        $str3 = '';
        $this->assertEquals(
            mb_strlen($this->traitObject->stringRandomize($str1)),
            mb_strlen($str1),
            sprintf($message, $str1, $this->traitObject->stringRandomize($str1))
        );
        $this->assertEquals(
            mb_strlen($this->traitObject->stringRandomize($str2)),
            mb_strlen($str2),
            sprintf($message, $str2, $this->traitObject->stringRandomize($str2))
        );
        $this->assertEquals(
            mb_strlen($this->traitObject->stringRandomize($str3)),
            mb_strlen($str3),
            sprintf($message, $str3, $this->traitObject->stringRandomize($str3))
        );

        $this->assertNotEquals($this->traitObject->stringRandomize($str1), $str1);
        $this->assertEquals($this->traitObject->stringRandomize($str2), $str2);
        $this->assertEquals($this->traitObject->stringRandomize($str3), $str3);
    }
}
