<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 17/04/16
 * Time: 2:17 PM
 */
/*
 * Problem Statement:
There are K lemurs on Madagascar and Kevin has N bananas. He has to give away all his bananas to lemurs. Lemurs are happy if all of them get the same number of bananas (even if they don't get any). In one minute Kevin can do one of the following:

Find one banana.
Discard one banana (eat).
Increase a population of lemurs on Madagascar by one.
If there are at least two lemurs remove one of them from Madagascar (don't ask how).
Help Kevin and find the minimum number of minutes Kevin needs to satisfy all the lemurs.

Input format:

The only line of the input contains two space-separated integers N and K.

Output format:

Output the single integer -- the minimum number of minutes.

Constraints:

1 ≤ K,N ≤ 105
K, N ≤ 50 in test data worth 33% of all points
SAMPLE INPUT
47 17

SAMPLE OUTPUT
2
 */

//$line = trim(fgets(STDIN));
//$set = explode(" ", $line);
//$n = $set[0];   // Banana
//$k = $set[1];   // Lemur
$n = 0;
$k = 0;
fscanf(STDIN, "%d %d\n", $n, $k);
$ans = 1e9;
for ($i = 2 * $k; $i > 0; $i--) {
    $j = $n - ($n % $i);
    $ans = min($ans, abs($n - $j) + abs($k-$i));
    $j += $i;
    $ans = min($ans, abs($n - $j) + abs($k-$i));
}
echo $ans;
?>