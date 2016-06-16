<?php 
    fscanf(STDIN, "%d\n", $t);
    while($t-- >0 ) {
        fscanf(STDIN, "%d %d\n", $N,$K);
        // printf("%d %d\n",$N,$K);
        $d = 10;
        global $j;
        $j=1;
        for(;$j<$K && $d<99;) {
            $d++;
            //printf("%d %d\n",$d/10,$d%10);
            if((int)($d/10) != (int)($d%10)) $j++;
        }
        // printf("j = %d\n",$j);
        if($j==$K) {
            $d1 = $d/10;
            $d2=$d%10;
            $x=$N/2;
            for($i=1;$i<=$x;$i++) {
                printf("%d%d", $d1,$d2);
            }
            if($N&1) {
                printf("%d",$d1);
            }
        } else {
            printf("-1");
        }
        printf("\n");
    }
?>