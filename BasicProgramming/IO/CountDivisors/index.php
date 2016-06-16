<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 17/06/16
 * Time: 12:36 AM
 * https://www.hackerearth.com/problem/algorithm/count-divisors/
 */
$l =0;
$r =0;
$k =0;
fscanf(STDIN, "%d %d %d", $l, $r, $k);
$count = 0;
for($i=$l; $i<=$r; $i++) {
    if($i%$k ===0) {
        $count++;
    }
}
echo $count . PHP_EOL;
?>