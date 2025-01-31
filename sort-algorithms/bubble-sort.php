<?php 

function print_array(array $arr): void 
{
    echo sprintf("[ %s ] \n", implode(", ", $arr) );
}

function bubble_sort(array &$arr): void
{
    for($i = 0; $i < count($arr); $i++) {
        for($j = $i + 1; $j < count($arr); $j++) {
            if($arr[$i] > $arr[$j]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$i];
                $arr[$i] = $temp;
            }
        }
    }
}

$arr = [5, 2, 9, 0, 1, 3, 8, 6, 4, 7];
print_array($arr);

bubble_sort($arr);
print_array($arr);
