<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 15/05/16
 * Time: 4:19 PM
 * https://www.hackerearth.com/problem/algorithm/maximum-and/
 */

fscanf(STDIN, "%d\n", $t);
while ($t--) {
    $a = 0;
    $b = 0;
    fscanf(STDIN, "%d %d\n", $a, $b);
    $max = 0;
    if( ($b - $a) == 1 ) {
        $max = $b & $a;
    } else {
        if($b%2) {
            $max = $b - 1;
        } else {
            $max = $b - 2;
        }
    }
    echo $max . "\n";
}
?>