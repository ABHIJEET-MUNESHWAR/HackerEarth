<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 17/04/16
 * Time: 5:01 PM
 * https://www.hackerearth.com/problem/algorithm/roy-and-wobbly-numbers/
 * 101, 121, 131, 141, 151, 161, 171, 181, 191, 202, 212, 232, 242, ...
 * 1010, 1212, 1313, 1414, 1515, 1616, 1717, 1818, 1919, 2020, 2121, 2323, 2424, ...
 * 10101, 12121, 13131, 14141, 15151, 16161, 17171, 18181, 19191, 20202, 21212, 23232, ...
 */

fscanf(STDIN, "%d\n", $n);
$set = array();
for ($i = 0; $i < $n; $i++) {
    $line = trim(fgets(STDIN));
    $set[] = explode(" ", $line);
}
for($i=0; $i<$n; $i++) {
    $number = findWobblyNumber($set[$i][0], $set[$i][1]);
    echo $number . "\n";
}

function findWobblyNumber($length, $index)
{
    $number = '';
    $limit = strlen((string)$index);
    if ($length == $limit) {
        return -1;
    } else {
        $repeatedNo = round($index/ 10) + 1;
        if($index == 1) {
            $index = 0;
        }
        for ($i = 1; $i <= $length; $i++) {
            if($i%2) {
                echo $repeatedNo;
            } else {
                echo $index;
            }
        }
        return $number;
    }
}

?>