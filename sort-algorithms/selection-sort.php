<?php 

/**
 * Print to array
 * 
 * @param array $array
 * @return void
 */
function print_array(array $array) : void
{
    echo sprintf("[ %s ]\n", implode(", ", $array));
}

function selection_sort(array &$arr): void 
{
    for ($i = 0; $i < count($arr) - 1; $i++) { 
        $min_index = $i;

        for( $j = $i + 1; $j < count($arr); $j++) {
            if( $arr[$j] < $arr[$min_index]) {
                $min_index = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] = $arr[$min_index];
        $arr[$min_index] = $temp;
    }
}

$arr = [4, 8, 1, 0, 9, 5, 6, 7];
print_array($arr);

selection_sort($arr);
print_array($arr);

