<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 17/06/16
 * Time: 12:25 AM
 * https://www.hackerearth.com/problem/algorithm/palindrome-check-2/
 */

fscanf(STDIN, "%s", $str);
$reverse = strrev($str);
if($str === $reverse) {
    echo "YES" . PHP_EOL;
} else {
    echo "NO" . PHP_EOL;
}

?>