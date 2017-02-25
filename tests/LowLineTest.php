<?php

namespace dgruen\Tests\LowLine;

use dgruen\LowLine\LowLine as _;
use dgruen\Tests\LowLine\funcs\ArrayTraitTestTrait as ArrayTest;
use dgruen\Tests\LowLine\funcs\StringTraitTestTrait as StringTest;
use dgruen\Tests\LowLine\funcs\TestTraitTestTrait as TestTrait;
use PHPUnit_Framework_TestCase as BaseTest;

class LowLineTest extends BaseTest
{
    use ArrayTest;
    use StringTest;
    use TestTrait;

    private $object;

    public function setUp()
    {
        $this->object = new _();
    }
}
