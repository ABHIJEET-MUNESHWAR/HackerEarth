<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 01/07/16
 * Time: 10:44 PM
 * https://www.hackerearth.com/july-easy-16/algorithm/the-string-monster-july-easy/
 */

fscanf(STDIN, "%d", $t);
while($t--) {
    fscanf(STDIN, "%d", $n);
    $stringsArray = array();
    $monsterSleepString = "";
    for($i=0; $i<$n; $i++) {
        fscanf(STDIN, "%s", $stringsArray[]);
    }
    fscanf(STDIN, "%s", $monsterSleepString);
    $stringsArrayLen = count($stringsArray);
    $monsterSleepString = str_split($monsterSleepString);
    sort($monsterSleepString);
    $monsterSleepString = implode('', $monsterSleepString);
    $isPossible = false;
    for($i=0; $i<$stringsArrayLen; $i++) {
        for($j=$i; $j<$stringsArrayLen; $j++) {
            $contact = $stringsArray[$i].$stringsArray[$j];
            $contact = str_split($contact);
            sort($contact);
            $contact = implode('', $contact);
            if($contact === $monsterSleepString) {
                $isPossible = true;
            }
        }
    }
    if($isPossible) {
        echo "YES" . PHP_EOL;
    } else {
        echo "NO" . PHP_EOL;
    }
}

?>