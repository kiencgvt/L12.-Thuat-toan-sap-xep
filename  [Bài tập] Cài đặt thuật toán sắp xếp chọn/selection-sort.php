<?php
function selectionSort(&$list) {
    for($i = 0; $i < count($list) - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($list); $j++) {
            if($list[$j] < $list[$min]) {
                $min = $j;
            }
        }
        swap($list, $i, $min);
    }
}
function swap(&$array, $left, $right) {
    $temp = $array[$left];
    $array[$left] = $array[$right];
    $array[$right] = $temp;
}
echo "<pre>";
$array = [1, 9, 4.5, 6.6, 5.7, -4.5];
selectionSort($array);
print_r($array);