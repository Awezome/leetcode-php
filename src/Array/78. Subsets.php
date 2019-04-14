<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function subsets($nums) {
        $results = [[]];

        foreach ($nums as $element) {
            foreach ($results as $combination) {
                $results[] = array_merge([$element],$combination);
            }
        }

        return $results;
    }
}
