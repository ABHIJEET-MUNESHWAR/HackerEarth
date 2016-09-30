<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 17/06/16
 * Time: 12:31 AM
 * https://www.hackerearth.com/problem/algorithm/find-product/
 */

fscanf(STDIN, "%d", $len);
$temp = rtrim(fgets(STDIN), "\n\r");
$arr = explode(" ", $temp);
array_walk($arr, 'intval');
$prod = 1;
$modulo = pow(10, 9) + 7;
foreach ($arr as $item) {
    $prod = ($prod * $item)%$modulo;
}
echo $prod . PHP_EOL;

?>