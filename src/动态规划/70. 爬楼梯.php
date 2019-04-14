<?php
/**
 * User: zyp
 * Date: 2019-04-06
 * Time: 16:10
 */


/*********  动态规划：LeetCode 12ms  *********/
class Solution {
    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        $memory = [];               //自下而上
        $memory[0] = 1;             //递推，爬上0阶楼梯有1种方法，往上推
        $memory[1] = 1;
        for($i = 2;$i<=$n;++$i){
            $memory[$i] = $memory[$i-1] + $memory[$i-2];
        }
        return $memory[$n];
    }
}

