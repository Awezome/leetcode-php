<?php

// 我们把符合下列属性的数组 A 称作山脉：

// A.length >= 3
// 存在 0 < i < A.length - 1 使得A[0] < A[1] < ... A[i-1] < A[i] > A[i+1] > ... > A[A.length - 1]
// 给定一个确定为山脉的数组，返回任何满足 A[0] < A[1] < ... A[i-1] < A[i] > A[i+1] > ... > A[A.length - 1] 的 i 的值。



class Solution {

/**
 * @param Integer[] $A
 * @return Integer
 */
function peakIndexInMountainArray($A) {
    $start=0;
    $end=count($A);

    while($start<=$end){
        $mid=(int)(($start+$end)/2);
        if($A[$mid-1]<$A[$mid] && $A[$mid]>$A[$mid+1]){
            return $mid;
        }else if($A[$mid-1]<$A[$mid] && $A[$mid]<$A[$mid+1]){
            $start=$mid;
        }else{
            $end=$mid;
        }
    }
    return -1;
}
}