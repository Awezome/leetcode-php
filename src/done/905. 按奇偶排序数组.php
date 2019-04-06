<?php

class Solution {

    /**
     * @param Integer[] $A
     * @return Integer[]
     */
    function sortArrayByParity($A) {
        $count=count($A);
        $i=0;
        $j=$count-1;

        while($i<$j){
            while($i<$j){
                if($A[$i]%2==1){
                    break;
                }
                $i++;
            }
            while($i<$j){
                if($A[$j]%2==0){
                    break;
                }
                $j--;
            }

            $t=$A[$i];
            $A[$i]=$A[$j];
            $A[$j]=$t;
            $i++;
            $j--;
        }

        return $A;
    }
}

$a=[3,1,2,4];

$b=(new Solution())->sortArrayByParity($a);
print_r($b);
