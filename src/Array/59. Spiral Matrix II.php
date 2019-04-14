<?php

// 实现思路：给定四个边界，left = 0,right = n-1,  top = 0,bottom = n-1,
// 然后每次进行四遍循环，
// (top)left->right  循环结束后top+1
// (right)top->bottom  循环结束后right-1
// (bottom)right->left  循环结束后bottom-1
// (left)bottom->top  循环结束后left+1
// 循环结束条件为index = n*n

//还要注意使用range时会有坑，比如 range(3,4,-1)

class Solution {

    /**
     * @param Integer $n
     * @return Integer[][]
     */
    function generateMatrix($n) {
        $max=$n*$n;

        $fill=array_fill(0,$n,0);
        $result=array_fill(0,$n,$fill);
        $flag=0;

        $l=0;
        $r=$n-1;
        $d=$n-1;
        $u=0;
        while ($flag<$max){
            for($i=$l;$i<=$r;$i++){
                $result[$u][$i]=++$flag;
            }
            $u++;

            for($i=$u;$i<=$d;$i++){
                $result[$i][$r]=++$flag;
            }
            $r--;

            for($i=$r;$i>=$l;$i--){
                $result[$d][$i]=++$flag;
            }
            $d--;

            for($i=$d;$i>=$u;$i--){
                $result[$i][$l]=++$flag;
            }
            $l++;
        }

        return $result;
    }
}
