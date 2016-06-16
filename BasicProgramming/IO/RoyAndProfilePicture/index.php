<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 17/06/16
 * Time: 12:43 AM
 * https://www.hackerearth.com/problem/algorithm/roy-and-profile-picture/
 */

fscanf(STDIN, "%d", $l);
fscanf(STDIN, "%d", $t);
while ($t--) {
    $w = 0;
    $h = 0;
    fscanf(STDIN, "%d %d", $w, $h);
    if(($w<$l)||($h<$l)) {
        echo "UPLOAD ANOTHER" . PHP_EOL;
    } else {
        if($w===$h) {
            echo "ACCEPTED" . PHP_EOL;
        } else {
            echo "CROP IT" . PHP_EOL;
        }
    }
}