<?php

class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        if($x<0){
            return false;
        }elseif ($x==0){
            return true;
        }

        $x=(string)$x;

        $len=strlen($x);
        $mid=(int)($len/2);

        for($i=0;$i<$mid;$i++){
            if($x[$i]!=$x[$len-$i-1]){
                return false;
            }
        }

        return true;
    }

    function isPalindrome2($x) {
        $x=(string)$x;
        return $x===strrev($x);
    }
}
