<?php
namespace dgruen\LowLine\funcs;

trait ArrayTrait
{
    /**
     * Chunk $array in smaller bits based on $chunkSize
     *
     * Chunk $array in to smaller arrays based on $chunkSize. The final chunk
     * may or may not be the same size depending on $array size and $chunkSize
     *
     * @param  array $array     Array to chunk
     * @param  int   $chunkSize Size of each chunk
     * @return array            Multidimensional array with the chunks
     */
    public function chunk(array $array, int $chunkSize)
    {
        // @TODO redo this. It's currently mutating the array
        return array_chunk($array, $chunkSize);
    }

    /**
     * Return array based on $array with falsey values removed
     *
     * Note that this will remove 0 values also
     *
     * @param  array $array Array to work against
     * @return array        New array without falsey values
     */
    public function compact(array $array)
    {
        $newArray = [];
        foreach ($array as $key => $value) {
            $value ? $newArray[$key] = $value : null;
        }

        return $newArray;
    }

    /**
     * Return a new array created from arrays passed in
     *
     * If any associative indexes are the same, the latter overrides. Numeric indexes
     * are not kept
     *
     * Any arguments that are not arrays will cause a typerror to be thrown
     *
     * @param  [array] Arrays to pass into the code
     * @return [array]        The new array made from input arrays
     */
    public function concat(array ...$arrays)
    {
        $newArray = [];
        foreach ($arrays as $arr) {
            $newArray = array_merge($newArray, $arr);
        }
        return $newArray;
    }


    /**
     * Return an array that's a reversed version of the input array.
     *
     * @param  [array] $array Initial array to reverse
     * @return [array]        The new reversed array
     */
    public function reverse($array)
    {
        // @XXX Possibly consider reimplementing this
        // to not use the built in function
        $newArray = array_reverse($array);
        return $newArray;
    }

    /**
     * Return values that are different between $array1 and subsequent passed in
     * arrays
     *
     * @param  [array] $array1 Initial array to search for differences
     * @return [array]         The array of different values
     */
    public function difference()
    {
        $args = func_get_args();
        return call_user_func_array("array_diff", $args);
    }

    /**
     * Return the diffence between $array1 and subsequent arrays after running
     * the predicate value
     *
     * @param [array] $array1 Array to inspect
     * @return [array] New array of filtered values
     *
     * @TODO Implement
     */
    public function differenceBy()
    {
        @trigger_error(sprintf('This method is not yet implemented (%s::%s)', __CLASS__, __FUNCTION__));
        foreach (func_get_args() as $arg) {
            $arg;
        }
        return null;
    }

    /**
     * Return the difference between $array1 and subsequent arrays accepting a
     * predicate "comparator" to compare elements
     * @return [type] [description]
     */
    public function differenceWith()
    {
        return null;
    }

    /**
     * Loop over each item in $array applying $func
     * @param  array  $array Array to iterate
     * @param  [function] $func  Function to apply to each item
     * @return [array]        New array wit $func applied to each value
     */
    public function map(array $array, $func)
    {
        $newArray = [];
        foreach ($array as $key => $value) {
            $newArray[$key] = call_user_func($func, $value);
        }
        return $newArray;
    }
}
