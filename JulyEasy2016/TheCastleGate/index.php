<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 01/07/16
 * Time: 9:31 PM
 * https://www.hackerearth.com/july-easy-16/algorithm/the-castle-gate-july-easy/
 */

fscanf(STDIN, "%d", $t);
while($t--) {
    fscanf(STDIN, "%d", $n);
    $count = 0;
    for($i=1; $i<=$n; $i++) {
        for($j=$i+1; $j<=$n; $j++) {
            if(($i ^ $j) <= $n) {
                $count++;
            }
        }
    }
    echo $count . PHP_EOL;
}

?>