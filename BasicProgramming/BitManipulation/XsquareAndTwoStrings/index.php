<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 14/05/16
 * Time: 7:24 PM
 * https://www.hackerearth.com/problem/algorithm/xsquare-and-two-strings-1/
 */

fscanf(STDIN, "%d\n", $n);
while ($n--) {
    $a_temp = rtrim(fgets(STDIN), "\n\r");
    $a = str_split($a_temp);
    $b_temp = rtrim(fgets(STDIN), "\n\r");
    $aLen = count($a);
    $isFound = false;
    for($i=0; $i<$aLen; $i++) {
        if(strstr($b_temp, $a[$i])){
            $isFound = true;
            break;
        }
    }
    if($isFound) {
        echo "Yes\n";
    } else {
        echo "No\n";
    }
}

?>