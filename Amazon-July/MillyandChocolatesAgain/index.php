<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 10/07/16
 * Time: 6:32 PM
 * https://www.hackerearth.com/amazon-hiring-challenge-1/problems/5428d3f4b2044a4688b8db588899ccb6/
 */

fscanf(STDIN, "%d", $boxes);
$chocolates = array_map('intval', explode(" ", trim(fgets(STDIN))));
fscanf(STDIN, "%d", $queries);
$suffixArray = array_fill(0, $boxes, 0);
$suffixArray[0] = $chocolates[0];

function binarySearch($query, $boxes, $suffixArray)
{
    $lb = 0;
    $ub = $boxes - 1;
    $mid = intval(($lb + $ub) / 2);
    while ($lb <= $ub) {
        if ($query <= $suffixArray[$lb]) {
            return $lb;
        }
        if ($query === $suffixArray[$ub]) {
            return $ub;
        }
        if (($suffixArray[$lb] < $query) && ($query <= $suffixArray[$lb + 1])) {
            return ($lb + 1);
        }
        if (($suffixArray[$mid] < $query) && ($query <= $suffixArray[$mid + 1])) {
            return ($mid + 1);
        }
        if (($suffixArray[$ub - 1] < $query) && ($query <= $suffixArray[$ub])) {
            return $ub;
        }
        if ($suffixArray[$mid] < $query) {
            $lb = $mid + 1;
        } else {
            $ub = $mid - 1;
        }
        $mid = intval(($lb + $ub) / 2);
    }
}

for ($i = 1; $i < $boxes; $i++) {
    $suffixArray[$i] = $chocolates[$i] + $suffixArray[$i - 1];
}
while ($queries--) {
    fscanf(STDIN, "%d", $query);
    $key = binarySearch($query, $boxes, $suffixArray);
    echo ($key + 1) . PHP_EOL;
}
?>