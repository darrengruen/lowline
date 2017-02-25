<?php
namespace dgruen\LowLine\funcs;

trait TestTrait
{

    /**
     * Test if a value is a php callable
     *
     * @param  mixed   $testCase Value to test
     * @return boolean           Returns true if $testCase is a callable, false otherwise
     */
    public function isCallable($testCase = null)
    {
        return is_callable($testCase);
    }

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

    /**
     * Test if $testCase is a string
     *
     * @param  mixed  $testCase The testcase
     * @return boolean          Returns true if $testCase is a string, false otherwise
     */
    public function isString($testCase = null)
    {
        return is_string($testCase);
    }
}
