<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 10/05/16
 * Time: 12:07 AM
 * https://www.hackerearth.com/problem/algorithm/lucky-numbers-20/
 * 3 5 6 11 15 
 */

function calculateLuckyNumbers(){
    $luckyNumbers = array();
    $bits = 62;
    for($i=0; $i<$bits; $i++) {
        for($j=0; $j<$i; $j++) {
            $luckyNumbers[] = pow(2, $i) + pow(2, $j);
        }
    }
    return $luckyNumbers;
}
$luckyNumbers = calculateLuckyNumbers();

fscanf(STDIN, "%d\n", $n);
$a = array();
while($n--) {
    fscanf(STDIN, "%d\n", $num);
    $sum = 0;
    for($i=0; $luckyNumbers[$i]<=$num; $i++) {
        $sum += $luckyNumbers[$i];
        $sum %= 1000000007;
    }
    echo $sum . "\n";
}
?>