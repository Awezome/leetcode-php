<?php
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function mySqrt($x) {
        $left=0;
        $right=$x;
        while($left<=$right){
            $mid=$left+intval(($right-$left)/2);
            $s=(int)($mid*$mid);
            if($s<$x){
                $left=$mid+1;
            }elseif ($s>$x){
                $right=$mid-1;
            }else{
                return $mid;
            }
        }
        return $right;
    }
}

