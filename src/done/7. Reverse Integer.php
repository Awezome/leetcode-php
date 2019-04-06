<?php

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $num=0;
        while($x!==0){
            $phpMax = pow(2,31) - 1;
            $phpMin = -pow(2,31);

            $t=$x%10;
            $x=(int)($x/10);

            if($num >  $phpMax/10 || ($num == $phpMax/10 && $t > 7)){ return 0;}
            if($num < $phpMin/10 || ($num == $phpMin/10 && $t<-8)){ return 0;}

            $num=$num*10+$t;
        }
        return $num;
    }

    function reverse2($x) {
        if($x>=0){
            $result=(int)strrev((string)$x);
        }else{
            $result=-(int)strrev((string)abs($x));
        }

        $phpMax = pow(2,31) - 1;
        $phpMin = -pow(2,31);

        if($result<$phpMin || $result>$phpMax){
            return 0;
        }else{
            return $result;
        }
    }
}
