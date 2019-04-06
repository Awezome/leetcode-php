<?php
/**
 * User: zyp
 * Date: 2019-04-06
 * Time: 16:10
 */

/*********  普通的递归过程：LeetCode无法通过  *********/
class Solution {
    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        return $this->calway($n);
    }
    private function calway($n){
        if($n == 0 || $n ==1) return 1;     //层层递归过程
        return $this->calway($n-1) + $this->calway($n-2);
    }
}
/*********  记忆化搜索：LeetCode 16ms  *********/
class Solution1 {
    private $memory = [];
    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        return $this->calway($n);
    }
    private function calway($n){
        if($n == 0 || $n ==1) return 1;
        if(empty($this->memory[$n]))
            $this->memory[$n] = $this->calway($n-1) + $this->calway($n-2);
        return $this->memory[$n];
    }
}
/*********  动态规划：LeetCode 12ms  *********/
class Solution2 {
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

