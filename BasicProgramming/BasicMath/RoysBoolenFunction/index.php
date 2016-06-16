<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 30/04/16
 * Time: 3:40 PM
 * https://www.hackerearth.com/problem/algorithm/roys-boolean-function-1/
 */

fscanf(STDIN, "%d\n", $n);
$set = array();
for($i=0; $i<$n; $i++) {
    fscanf(STDIN, "%d\n", $num);
    $set[] = $num;
}
$len = sizeof($set);
for($i=0; $i<$len; $i++) {
    $num = $set[$i];
    if($num<3) {
        echo "FALSE\n";
    } else {
        $totalRelativePrimeNumbers = findTotalRelativePrimeNumbers($num);
        $isPrime = isPrime($totalRelativePrimeNumbers);
        if($isPrime) {
            echo "TRUE\n";
        } else {
            echo "FALSE\n";
        }
    }
}

function gcd($a, $b)
{
    if ($a == 0)
        return $b;
    return gcd($b%$a, $a);
}

function findTotalRelativePrimeNumbers($n) {
    $result = 1;
    for ($i=2; $i < $n; $i++)
        if (gcd($i, $n) == 1)
            $result++;
    return $result;
}

function isPrime($n) {
    $isPrime = true;
    for($i=2; $i<$n; $i++) {
        if($n % $i === 0) {
            $isPrime = false;
            break;
        }
    }
    return $isPrime;
}