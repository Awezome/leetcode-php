<?php

/**
 * 1. 尝试将最大的饼干给最贪心的小朋友，把大小为3的饼干给贪心指数为2的小朋友
 * 2. 如果最大的饼干可以满足最贪心的小朋友，这样留给次贪心的小朋友的饼干也将是当前最大的饼干，将大小为2 的饼干给贪心指数为1的小朋友
 * 3. 如果无法满足，则说明所有的饼干都肯定无法满足最贪心的小朋友，此时只能将这块最大的饼干去尝试满足次贪心的小朋友
 * Class Solution
 */

class Solution {

    /**
     * @param Integer[] $g
     * @param Integer[] $s
     * @return Integer
     */
    function findContentChildren($g, $s) {
        rsort($g);
        rsort($s);        //从大到小排序
        $leng = count($g);          //计算小朋友的数量
        $lens = count($s);          //计算饼干的数量
        $indexg = $indexs = 0;      //计算当前的饼干下标和小朋友下标
        $res = 0;                   //保存最终结果
        while ($indexg<$leng && $indexs<$lens) {    //遍历数组，只要不越界就行
            if($s[$indexs] >= $g[$indexg]){         //如果当前的饼干满足当前的小朋友
                $res++;                             //则记录结果+1
                $indexg++;                          //下标都往下一位
                $indexs++;
            }else{
                $indexg++;                          //否则尝试满足下一个次贪心的小朋友
            }
        }
        return $res;
    }
}
