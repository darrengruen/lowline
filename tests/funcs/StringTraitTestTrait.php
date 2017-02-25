<?php
namespace dgruen\Tests\LowLine\funcs;

use dgruen\LowLine\LowLine as _;
use dgruen\Tests\LowLine\funcs\AbstractTraitTest as BaseTest;

trait StringTraitTestTrait
{
    /** @covers dgruen\LowLine\LowLine::stringCount */
    public function testStringCount()
    {
        $this->assertEquals(_::stringCount('hello'), 5);
    }

    /** @covers dgruen\LowLine\LowLine::stringRandomize */
    public function testStringRandomize()
    {
        $message = 'failed with %s input and %s output';
        $str1 = 'hello world';
        $str2 = 'h';
        $str3 = '';
        $this->assertEquals(
            mb_strlen($this->object->stringRandomize($str1)),
            mb_strlen($str1),
            sprintf($message, $str1, $this->object->stringRandomize($str1))
        );
        $this->assertEquals(
            mb_strlen($this->object->stringRandomize($str2)),
            mb_strlen($str2),
            sprintf($message, $str2, $this->object->stringRandomize($str2))
        );
        $this->assertEquals(
            mb_strlen($this->object->stringRandomize($str3)),
            mb_strlen($str3),
            sprintf($message, $str3, $this->object->stringRandomize($str3))
        );

        $this->assertNotEquals($this->object->stringRandomize($str1), $str1);
        $this->assertEquals($this->object->stringRandomize($str2), $str2);
        $this->assertEquals($this->object->stringRandomize($str3), $str3);
    }

    /** @covers dgruen\LowLine\LowLine::stringReplace */
    public function testStringReplace()
    {
        $this->assertEquals(_::stringReplace('work', 'k', 'd'), 'word');
        $this->assertEquals(_::stringReplace('yello', 'o', 'ow'), 'yellow');
        $this->assertEquals(_::stringReplace('hello world', ' ', ' & '), 'hello & world');
    }

    /**
     * @covers dgruen\LowLine\LowLine::stringReverse
     * @covers dgruen\LowLine\funcs\StringTrait::stringReverse
     */
    public function testStringReverse()
    {
        $this->assertEquals($this->object->stringReverse(''), '');
        $str    = 'abcde';
        $strRes = 'edcba';
        $this->assertEquals($this->object->stringReverse($str), $strRes);
        $num = 456;
        $numRes = 654;
        $this->assertEquals($this->object->stringReverse($num), $numRes);
    }
}
