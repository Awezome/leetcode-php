<?php

/**
 * 三种方法：1.散列表 2.先排序，出现次数大于一半的肯定在中间 3.摩尔投票算法
 */

class Solution {

    /**
     * 方法2
     * @param $nums
     * @return mixed
     */
    function majorityElement2($nums) {
        sort($nums);
        return $nums[(int)(count($nums))/2];
    }

    /**
     * 摩尔投票算法是基于这个事实：每次从序列里选择两个不相同的数字删除掉（或称为“抵消”），
     * 最后剩下一个数字或几个相同的数字，就是出现次数大于总数一半的那个。
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $res = $nums[0];
        $count=0;
        for($i=1;$i<count($nums);$i++){
            if($nums[$i] == $res){
                $count++;
            }else{
                $count--;
            }
            if($count < 0){
                $res = $nums[$i];
                $count = 0;
            }
        }
        return $res;
    }

}
