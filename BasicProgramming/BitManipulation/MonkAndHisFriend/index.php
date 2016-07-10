<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 17/06/16
 * Time: 1:03 AM
 * https://www.hackerearth.com/problem/algorithm/monk-and-his-friend/
 */

function countBitsSet($value)
{
    $count = 0;
    while ($value) {
        $count += $value & 1;
        $value = $value >> 1;
    }
    return $count;
}

fscanf(STDIN, "%d", $t);
while ($t--) {
    $n1 = 0;
    $n2 = 0;
    fscanf(STDIN, "%d %d", $n1, $n2);
    $xor = $n1 ^ $n2;
    $count = countBitsSet($xor);
    echo $count . PHP_EOL;
}