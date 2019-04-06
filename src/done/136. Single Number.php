<?php
class Solution {

/**
 * @param Integer[] $nums
 * @return Integer
 */
    function singleNumber($nums) {
        $res = 0;
        foreach($nums as $val) {
            $res ^= $val;
        }
        return $res;
    }
}