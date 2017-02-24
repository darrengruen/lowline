<?php
namespace dgruen\Tests\LowLine\funcs;

use PHPUnit_Framework_TestCase as BaseTest;

/**
 * Base test case for traits
 */
abstract class AbstractTraitTest extends BaseTest
{
    private $traitString = 'dgruen\LowLine\funcs\%s';

    public function setUp()
    {
        $this->traitObject = $this->createObjectForTrait();
    }

    private function createObjectForTrait()
    {
        $traitName = sprintf($this->traitString, static::TRAIT_NAME);
        return $this->getObjectForTrait($traitName);
    }
}
