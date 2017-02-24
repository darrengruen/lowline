<?php
namespace dgruen\LowLine\funcs;

trait TestTrait
{
    /**
    * Tests if $testCase is a numeric value
    *
    * @param  [mixed]  $testCase The variable to check
    * @return boolean           Returns true if $testCase is numeric, false
    * otherwise
    */
    public function isNumeric($testCase = null)
    {
        return is_numeric($testCase);
    }

    /**
     * Test if $testCase is an object
     *
     * @param  [mixed]  $testCase the variable to check
     * @return boolean           True if $testCase is an object, false otherwise
     */
    public function isObject($testCase = null)
    {
        return is_object($testCase);
    }
}
