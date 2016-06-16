<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 14/05/16
 * Time: 10:10 PM
 * https://www.hackerearth.com/problem/algorithm/monk-and-tasks/
 */

function countSetBits($n) {
    $count = 0;
    while($n) {
        $n &= ($n-1);
        $count++;
    }
    return $count;
}

fscanf(STDIN, "%d\n", $n);
while($n--) {
    fscanf(STDIN, "%d\n", $len);
    $a_temp = rtrim(fgets(STDIN), "\n\r");
    $a = explode(" ", $a_temp);
    $arr = array();
    array_walk($a, 'intval');
    for($i=0; $i<$len; $i++) {
        $num = $a[$i];
        $count = countSetBits($num);
        $arr[$count][] = $num;
    }
    ksort($arr);
    foreach ($arr as $item){
        echo implode(" ", $item) . " ";
    }
    echo "\n";
}
?>