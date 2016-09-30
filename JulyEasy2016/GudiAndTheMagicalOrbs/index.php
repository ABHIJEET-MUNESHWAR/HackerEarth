<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 01/07/16
 * Time: 10:03 PM
 * https://www.hackerearth.com/july-easy-16/algorithm/gudi-and-the-magical-orbs-july-easy/
 */

fscanf(STDIN, "%d", $t);
while ($t--) {
    $n = 0;
    $m = 0;
    $k = 0;
    $matrix = array();
    fscanf(STDIN, "%d %d %d", $n, $m, $k);
    for ($i = 0; $i < $n; $i++) {
        $matrix[] = array_map("intval", explode(" ", trim(fgets(STDIN))));
    }
    $i = 0;
    $j = 0;
    $sum = $matrix[0][0];
    while (($i < $n-1) && ($j < $m-1)) {
        $south = $matrix[$i + 1][$j];
        $east = $matrix[$i][$j + 1];
        $southEast = $matrix[$i + 1][$j + 1];
        if(($i+1 === $n-1) && ($j+1===$m-1) && ($sum+$southEast<=$k)) {
            $sum+=$southEast;
            $i++;
            $j++;
        } else {
            if(($south<$east)&&($south<$southEast)) {
                $sum += $south;
                $i++;
            } elseif (($east<$south)&&($east<$southEast)) {
                $sum+=$east;
                $j++;
            } else {
                $sum+=$southEast;
                $i++;
                $j++;
            }
        }
    }
    if($sum<=$k) {
        echo $sum . PHP_EOL;
    } else {
        echo "-1" . PHP_EOL;
    }
}

?>