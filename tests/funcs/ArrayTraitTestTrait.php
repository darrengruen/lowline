<?php
namespace dgruen\Tests\LowLine\funcs;

use dgruen\Tests\LowLine\funcs\AbstractTraitTest as BaseTest;

trait ArrayTraitTestTrait
{
    /** @covers \dgruen\LowLine\funcs\ArrayTrait::chunk */
    public function testChunk()
    {
        $array = [ "a", "b", "c", "d" ];
        $subset = [ [ "a", "b" ], [ "c", "d" ] ];
        $this->assertTrue($this->object->chunk($array, 2) == $subset);
        $this->assertEquals($array, [ "a", "b", "c", "d" ]);
    }

    /** @covers dgruen\LowLine\funcs\ArrayTrait::compact */
    public function testCompact()
    {
        $array = [ "hello", "World", false, "", 0 ];
        $newArray = $this->object->compact($array);
        $this->assertCount(5, $array);
        $this->assertCount(2, $newArray);
        $this->assertTrue($array !== $newArray);
    }

    /** @covers dgruen\LowLine\LowLine::concat */
    public function testConcat()
    {
        $newArray  = $this->object->concat( [ "1", "2", "3" ], [ "4" ], [ "5", "6", "7" ] );
        $this->assertCount(7, $newArray, "passed");
        $resultArr = ['abc', 'def', 'ghi', 'jkl', 'mno'];
        $arr       = ['abc'];
        $add1      = ['def', 'ghi'];
        $add2      = ['jkl', 'mno'];
        $this->assertEquals($this->object->concat($arr, $add1, $add2), $resultArr);
    }

    /** @covers dgruen\LowLine\LowLine::difference */
    public function testDifference()
    {
        $array1 = [ '1', '2', '3' ];
        $array2 = [ '1', '3', '4' ];
        $array3 = [ '1', '5', '6' ];

        $newArray = $this->object->difference($array1, $array2, $array3);
        $this->assertCount(1, $newArray);
        $this->assertContains('2', $newArray);
    }

    /** @covers dgruen\LowLine\LowLine::map */
    public function testMap()
    {
        $array = [ 1, 2, 3 ];
        $newArray = $this->object->map(
            $array,
            function ($num) {
                return $num * 2;
            }
        );
        $this->assertEquals($newArray, [ 2, 4, 6 ]);
        $this->assertNotEquals($newArray, $array);
        $array2 = [ 1.1, 2.5, 3 ];
        $newArray2 = $this->object->map($array2, "floor");
        $this->assertEquals($newArray2, [ 1, 2, 3 ]);
    }

    /** @covers dgruen\LowLine\LowLine::reverse */
    public function testReverse()
    {
        $newArray = $this->object->reverse([1,2,3,4,5]);
        $this->assertTrue($newArray == [5,4,3,2,1]);
    }
}
