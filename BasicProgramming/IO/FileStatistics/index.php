<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 07/05/16
 * Time: 3:18 PM
 * https://www.hackerearth.com/problem/algorithm/file-statistics/
 */

fscanf(STDIN, "%s\n", $name);
$contents = file_get_contents($name);
echo $contents;
$n = 0;
$c = 0;
$w = 1;
$len = strlen($contents);
for ($i = 0; $i < $len; $i++) {
    if ($contents[$i] == "\n") {
        $n++;
    } else if ($contents[$i] == " ") {
        $w++;
    }
    $c++;
}
echo $n . "\n";
echo $w . "\n";
echo $c . "\n";
echo (fileowner($name)) . "\n";
echo (filegroup($name)) . "\n";
echo (filemtime($name)) . "\n";
?>