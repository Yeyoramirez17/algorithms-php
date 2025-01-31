<?php

/**
 * Binary search algorithm implement.
 * 
 * @param array $arr
 * @param int $to_search
 * @return int
 */
function search_binary(array $arr, int $to_search): int
{
    $first = 0;
    $last  = count($arr) - 1;

    while ($first <= $last) {
        
        $middle = floor(($first + $last) / 2);
        
        if ($arr[$middle] === $to_search) {
            return $arr[$middle];
        }
        
        if ($to_search < $arr[$middle]) {
            $last = $middle - 1; 
        } else {
            $first = $middle + 1; 
        }
    }

    return -1;
}

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];

echo sprintf("\n-- Result: %d", search_binary($arr, 14));
