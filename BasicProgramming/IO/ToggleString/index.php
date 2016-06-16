<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 17/06/16
 * Time: 12:20 AM
 * https://www.hackerearth.com/problem/algorithm/modify-the-string/
 */

fscanf(STDIN, "%s", $str);
$str = strtolower($str) ^ strtoupper($str) ^ $str;
echo $str . PHP_EOL;

?>