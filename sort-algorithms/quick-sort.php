<?php

/**
 * Print to array.
 * 
 * @param array $arr
 * @return void
 */
function print_array( array $arr): void 
{
    for ($i = 0; $i <= count($arr) - 1; $i++) {
        echo $arr[$i] ." \t";
    }
    echo "\n";
}

/**
 *  Algorithm Quick Sort
 * 
 * @param array $arr
 * @param int $start
 * @param int $end
 * @return void
 */
function quickSort(array &$arr, int $start, int $end): void
{
    if($start < $end) {
        $p = partition($arr, $start, $end);
        quickSort($arr, $start, $p - 1); // Ordena los elementos del lado izquierdo
        quickSort($arr, $p + 1, $end);   // Ordena los elementos del lado derecho
    }
}

/**
 * Método para encontrar la posición de la partición.
 * 
 * @param array $arr
 * @param int $start
 * @param int $end
 * @return int
 */
function partition(array &$arr, int $start, int $end): int 
{
    $pivot = $arr[$end];
    $i = $start;

    for($j = $start; $j < $end; $j++) 
    {
        if($arr[$j] <= $pivot) 
        {
            $temp = $arr[ $j ];
            $arr[ $j ] = $arr[ $i ];
            $arr[ $i ] = $temp;
            $i++;
        }
    }

    $t = $arr[ $i ];
    $arr[ $i ] = $arr[ $end ];
    $arr[ $end ] = $t;
    
    return $i;
}

function quickSortWithLoopWhile(array &$arr, int $start, int $end): void 
{
    if( $start < $end) {
        $p = partitionWithLoopWhile( $arr, $start, $end);
        quickSortWithLoopWhile($arr, $start, $p - 1);
        quickSortWithLoopWhile($arr, $p + 1, $end);
    }
}
function partitionWithLoopWhile(array &$arr, int $start, int $end): int
{
    $pivot = $arr[$start];
    $i = $start;
    $j = $end;

    while($i < $j) {
        while($arr[$i] <= $pivot && $i < $end) {
            $i++;
        }

        while($arr[$j] > $pivot && $j > $start) {
            $j--;
        }

        if($i < $j) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
        }
    }

    $arr[$start] = $arr[$j];
    $arr[$j] = $pivot;

    return $j;
}

$arr = [4, 8, 1, 9, 0, 3, 6, 2, 7, 5];
print_array($arr);

// quickSort($arr, 0, count($arr) - 1);
quickSortWithLoopWhile($arr, 0, count($arr) - 1);
print_array($arr);
