<?php
function bubbleSort(&$list) {
    for ($j = 0; $j < count($list) - 1; $j++) {
        for ($i = 0; $i < count($list) - 1 - $j; $i++) {
            if ($list[$i] > $list[$i + 1]) {
                $temp = $list[$i + 1];
                $list[$i + 1] = $list[$i];
                $list[$i] = $temp;
            }
        }
    }
}
$array = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
bubbleSort($array);
echo "<pre>";
print_r($array);