<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return String
     */
    function largestNumber($nums) {
        usort($nums,function($a,$b){
            return $b.$a<=>$a.$b;
        });

        $s='';
        foreach($nums as $v){
            $s.=$v;
        }

        if($s[0]==='0'){
            return '0';
        }

        return $s;
    }
}

echo (new Solution())->largestNumber([0,0]);
