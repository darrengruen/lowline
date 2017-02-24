# Tests

*`isNumeric($testCase)`*

Tests whether $testCase is a numeric value: 2, "3"

**returns** boolean

**arguments**
- $testCase: Variable to test

~~~
$_  = new _;
$_->isNumeric("23"); //=>true
$_->isNumeric(1700); //=>true
$_->isNumeric("hello"); //=> false
~~~

*`isObject($testCase)`*

Tests whether $testCase is an object

~~~

~~~
