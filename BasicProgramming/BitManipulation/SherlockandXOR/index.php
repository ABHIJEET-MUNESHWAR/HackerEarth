<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 14/05/16
 * Time: 3:51 PM
 * https://www.hackerearth.com/problem/algorithm/sherlock-and-xor/description/
Input and Output
First line T, the number of test cases. Each test case: first line N, followed by N integers in next line. For each testcase, print the required answer in one line.
2
3
1 2 3
4
1 2 3 4
 */
fscanf(STDIN, "%d\n", $n);
while($n--) {
    fscanf(STDIN, "%d\n", $len);
    $a_temp = rtrim(fgets(STDIN), "\n\r");
    $a = explode(" ", $a_temp);
    array_walk($a, 'intval');
    $odd = 0;
    $even = 0;
    for($i=0; $i<$len; $i++) {
        if($a[$i]%2) {
            $odd++;
        } else{
            $even++;
        }
    }
    echo ($odd * $even) . "\n";
}
?>