<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 08/05/16
 * Time: 4:09 PM
 * https://www.hackerearth.com/problem/algorithm/the-magic/
 * 2
 */

fscanf(STDIN, "%d\n", $n);
$a = array();
for($i=0; $i<$n; $i++) {
    fscanf(STDIN, "%d\n", $num);
    $a[] = $num;
}
$len = sizeof($a);
for($j=0; $j<$len; $j++) {
    $num = $a[$j];
    $rem = 0;
    $bin = 0;
    $i = 1;
    $days = 0;
    while($num) {
        $rem = $num % 2;
        if($rem) {
            $days ++;
        }
        $bin = $bin + ($rem * $i);
        $num = intval($num / 2);
        $i = $i * 10;
    }
    echo $days . "\n";
}