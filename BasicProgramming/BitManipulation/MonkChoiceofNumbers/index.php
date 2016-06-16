<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 15/05/16
 * Time: 12:51 PM
 * https://www.hackerearth.com/problem/algorithm/monks-choice-of-numbers-1/
 */

function countSetBits($n) {
    $count = 0;
    while($n) {
        $n &= ($n-1);
        $count++;
    }
    return $count;
}

fscanf(STDIN, "%d\n", $t);
while($t--) {
    fscanf(STDIN, "%d %d\n", $n, $k);
    $a_temp = rtrim(fgets(STDIN), "\n\r");
    $a = explode(" ", $a_temp);
    array_walk($a, 'intval');
    $arr = array();
    for($i=0; $i<$n; $i++) {
        $bits = countSetBits($a[$i]);
        $arr[$bits][] = $a[$i];
    }
    krsort($arr);
    $count = 0;
    $len = count($arr);
    foreach($arr as $key=>$value) {
        if(!$k) {
            break;
        }
        $innerLen = count($value);
        if($innerLen > 1) {
            for($j=0; $j<$innerLen && $k>0; $j++) {
                $k--;
                $count+=$key;
            }
        } else {
            $k--;
            $count+=$key;
        }
    }
    echo $count . "\n";
}
?>