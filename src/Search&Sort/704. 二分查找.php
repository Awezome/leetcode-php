<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {
        $low=0;
        $high=count($nums)-1;

        while($low<=$high){
            $mid=$low+intval(($high-$low)/2);
            echo $low.' '.$high.' '.$mid.PHP_EOL;
            if($nums[$mid]==$target){
                return $mid;
            }elseif($target<$nums[$mid]){
                $high=$mid-1;
            }else{
                $low=$mid+1;
            }
        }

        return -1;
    }
}

$nums=[-1,0,3,5,9,12];
$k=2;
echo (new Solution())->search($nums,$k);
