<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 15/05/16
 * Time: 5:32 PM
 * https://www.hackerearth.com/problem/algorithm/subset-and-4/
 */

fscanf(STDIN, "%d\n", $t);
while ($t--) {
    fscanf(STDIN, "%d %d\n", $z, $n);
    $a_temp = rtrim(fgets(STDIN), "\n\r");
    $a = explode(" ", $a_temp);
    array_walk($a, 'intval');
    $ans = $z;
    for($i=0; $i<$n; $i++) {
        $ans = $ans & $a[$i];
    }
    if($ans) {
        echo "No\n";
    } else {
        echo "Yes\n";
    }
}

?>