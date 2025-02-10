<?php 
function print_array(array $array) : void
{
    echo sprintf("[ %s ]\n", implode(", ", $array));
}
function mergeSort(array &$arr, int $left, int $right): void 
{
    if($left < $right) {
        $middle = $left + intdiv(($right - $left), 2);
        mergeSort($arr, $left, $middle);
        mergeSort($arr, $middle + 1, $right);
        merge($arr, $left, $middle, $right);
    }
}

function merge(array &$arr, int $left, int $middle, int $right): void 
{
    $leftArrLength = $middle - $left + 1;
    $rightArrLength = $right - $middle;

    $leftArr = array_slice($arr, $left, $leftArrLength);
    $rightArr = array_slice($arr, $middle + 1, $rightArrLength);

    $i = 0;
    $j = 0;
    $k = $left;

    while ($i < $leftArrLength && $j < $rightArrLength) {
        if($leftArr[$i] < $rightArr[$j]) {
            $arr[$k] = $leftArr[$i];
            $i++;
        } else {
            $arr[$k] = $rightArr[$j];
            $j++;
        }
        $k++;
    }

    while($i < $leftArrLength) {
        $arr[$k] = $leftArr[$i];
        $i++;
        $k++;
    }

    while( $j < $rightArrLength) {
        $arr[$k] = $rightArr[$j];
        $j++;
        $k++;
    }
}

$arr = array(4, 7, 1, 0, 3, 6, 2, 8, 9, 5);
print_array($arr);

mergeSort($arr, 0, count($arr) - 1);
print_array($arr);