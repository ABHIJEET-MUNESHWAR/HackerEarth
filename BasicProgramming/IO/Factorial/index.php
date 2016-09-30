<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 17/06/16
 * Time: 12:50 AM
 * https://www.hackerearth.com/problem/algorithm/find-factorial/
 */

fscanf(STDIN, "%d", $n);
$fact = 1;
while($n) {
    $fact*=$n--;
}
echo $fact . PHP_EOL;

?>