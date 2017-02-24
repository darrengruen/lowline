<?php
namespace dgruen\Tests\LowLine\funcs;

use dgruen\LowLine;
use dgruen\Tests\LowLine\funcs\AbstractTraitTest as BaseTest;

class ArrayTraitTest extends BaseTest
{
    const TRAIT_NAME = 'ArrayTrait';

    /***************************************************************************
     * Tests
     **************************************************************************/

    /** @covers LowLine::chunk */
    public function testChunk()
    {
        $array = [ "a", "b", "c", "d" ];
        $subset = [ [ "a", "b" ], [ "c", "d" ] ];
        $this->assertTrue($this->traitObject->chunk($array, 2) == $subset);
        $this->assertEquals($array, [ "a", "b", "c", "d" ]);
    }

    /** @covers LowLine::compact */
    public function testCompact()
    {
        $array = [ "hello", "World", false, "", 0 ];
        $newArray = $this->traitObject->compact($array);
        $this->assertCount(5, $array);
        $this->assertCount(2, $newArray);
        $this->assertTrue($array !== $newArray);
    }

    /** @covers LowLine::concat */
    public function testConcat()
    {
        $newArray = $this->traitObject->concat(
            [ "1", "2", "3" ],
            [ "4" ],
            [ "5", "6", "7" ]
        );
        $this->assertCount(7, $newArray, "passed");
    }

    /** @covers LowLine::reverse */
    public function testReverse()
    {
        $newArray = $this->traitObject->reverse([1,2,3,4,5]);

        $this->assertTrue($newArray == [5,4,3,2,1]);
    }

    /** @covers LowLine::difference */
    public function testDifference()
    {
        $array1 = [ '1', '2', '3' ];
        $array2 = [ '1', '3', '4' ];
        $array3 = [ '1', '5', '6' ];

        $newArray = $this->traitObject->difference($array1, $array2, $array3);
        $this->assertCount(1, $newArray);
        $this->assertContains('2', $newArray);
    }

    /** @covers LowLine::map */
    public function testMap()
    {
        $array = [ 1, 2, 3 ];
        $newArray = $this->traitObject->map(
            $array,
            function ($num) {
                return $num * 2;
            }
        );
        $this->assertEquals($newArray, [ 2, 4, 6 ]);
        $this->assertNotEquals($newArray, $array);
        $array2 = [ 1.1, 2.5, 3 ];
        $newArray2 = $this->traitObject->map($array2, "floor");
        $this->assertEquals($newArray2, [ 1, 2, 3 ]);
    }
}
