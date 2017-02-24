# Arrays

**_::chunk($array, $chunkSize)**

Creates a new array of elements split into groups based on $chunkSize.

```
$array = [ '1', '2', '3', '4' ];

$_ = new _;

$_->chunk($array, 2); //=>[ [ '1', '2' ], [ '3', '4' ] ]
```

**_::compact($array)**

Removes all falsey values from $array

```
$array = [ false, ', 0, '0' , true, 'hello' ];

$_ = new _;

$_->:compact($array); //=> [ true, 'hello' ]

```

**_::concat($array, $array2[, $array3...])**

Concatenates multiple arrays into a new array. If any values have the same key,
the last one wins
```
$array1 = [ '1', '2' ];
$array2 = [ '3', '4' ];
$array3 = [ 'a', 'b', 'c' ];

$_ = new _;

$_->concat($array1, $array2, $array3); //=>[ '1', '2', '3', '4', 'a', 'b', 'c' ]
```

**_::difference($array1[, $array2 ...])**

Calculate the difference between $array1 and all subsequent arrays passed in
~~~
$array1 = [ '1', '2', '3' ];
$array2 = [ '1', '3', '4' ];
$array3 = [ '1', '5', '6' ];

$_ = new _;
$_->difference($array1, $array2, $array3); //=>[ '2' ]
~~~

**_::map($array, $func)**

Apply $func to each value of $array return a new array with computed values
$func can be either a function or a string name of a function
~~~
$array = [ 1, 2, 3 ];

$_->map($array, function ($num) {
    return $num * 2;
}); //=> [ 2, 4, 6 ];

$array2 = [ 1.1, 2.5, 3 ];
$_->map($array2, "floor"); //=>[ 1, 2, 3 ]
~~~
