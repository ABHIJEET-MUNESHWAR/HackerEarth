<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 09/04/16
 * Time: 6:12 PM
 */
fscanf(STDIN, "%d\n", $n);
$line = trim(fgets(STDIN));
$set = explode(" ", $line);
$size = sizeof($set);
for($i=0; $i<$size; $i++) {
    $set[$i] = (int)$set[$i];
}
for ($i = 0; $i < $size; $i++) {
    $isDivisible = false;
    for ($j = 0; $j < $size; $j++) {
        if ( ($set[$i] !== $set[$j]) && ($set[$i] % $set[$j] === 0) ){
            $isDivisible = true;
            break;
        }
    }
    if (!$isDivisible) {
        echo $set[$i] . " ";
    }
}

?>