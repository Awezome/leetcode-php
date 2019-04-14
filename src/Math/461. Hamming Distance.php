<?php

function hammingDistance($x, $y) {
    $x=$x^$y;
    $flag=0;
    while($x>0){
        if($x&1==1){
            $flag++;
        }
        $x=$x>>1;
    }
    return $flag;
}

