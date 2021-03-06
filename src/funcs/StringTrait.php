<?php
namespace dgruen\LowLine\funcs;

trait StringTrait
{
    /**
     * Return the count of characters in a string
     *
     * @param  string $str The string to count characters in
     * @return int      The number of characters in the string
     */
    public function stringCount(string $str)
    {
        return mb_strlen($str);
    }

    /**
     * Return $str in random order
     *
     * Takes input $str and returns it in a randomized order/
     *
     * @param  string $str   The string to randomize
     * @param  integer $rolls The number of times to change characters. Default is the length of $str
     * @return string        Randomized version of $str
     */
    public function stringRandomize(string $str, int $rolls = null): string
    {
        $strlen = strlen($str);

        if ($strlen <= 1) {
            return $str;
        }

        $rolls = $rolls ?? $strlen;

        $strArray  = str_split($str, 1);
        for ($i = 0; $i <= $rolls; $i++) {
            // Get a random number between 0 and $strlen
            $pickAt = rand(1, $strlen) -1;
            // use that to pick the character
            $pickChar = $strArray[$pickAt];
            // remove that char
            unset($strArray[$pickAt]);
            // get a new number between 0 and $strlen - 1
            $placeAt = rand(0, $strlen - 1);
            $lArray = array_slice($strArray, 0, $placeAt);
            $lArray[] = $pickChar;
            $rArray = array_slice($strArray, $placeAt);
            $strArray = array_merge($lArray, $rArray);
        }

        return implode($strArray, '');
    }

    /**
     * Replace instances of $needle with $replace in $str
     *
     * @param  string $str     The string to search
     * @param  string $needle  The string to replace
     * @param  string $replace The replacement string
     * @return string          The new string with replacements
     */
    public function stringReplace(string $str, string $needle, string $replace)
    {
        return str_replace($needle, $replace, $str);
    }

    /**
     * Reverse $str
     *
     * Takes input $str and returns it reversed
     *
     * @param  string $str String to reverse
     * @return string      Reverse of input $str
     */
    public function stringReverse(string $str)
    {
        $strArray = str_split($str, 1);
        $newArray = array_reverse($strArray);

        return implode($newArray, '');
    }
}
