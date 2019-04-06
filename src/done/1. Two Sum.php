<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $map = [];
        foreach ($nums as $key => $value) {
            if (isset($map[$target - $value])) {
                return [$map[$target - $value],$key];
            } else {
                $map[$value] = $key;
            }
        }
        return null;
    }

}
