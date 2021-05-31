<?php
function insertionSort(&$myArray): array
{
    for ($i = 0; $i < count($myArray); $i++) {
        $val = $myArray[$i];
        $j = $i - 1;
        while ($j >= 0 && $myArray[$j] < $val) {
            $myArray[$j + 1] = $myArray[$j];
            $j--;
        }
        $myArray[$j + 1] = $val;
    }
    return $myArray;
}

$array = [5, -4, 3, 7, 2, 1, 0, 8, 9, 2];
insertionSort($array);
echo "<pre>";
print_r($array);