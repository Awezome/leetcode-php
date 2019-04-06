<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function findKthLargest($nums, $k) {

        $low=0;
        $high=count($nums)-1;
        $k=count($nums)-$k;

        while($low<=$high){
            $p=$this->partition($nums,$low,$high);
            echo implode(",",$nums).PHP_EOL ;
            echo $p.PHP_EOL;
            if($k==$p){
                return $nums[$p];
            }elseif ($k<$p){
                $high=$p-1;
            }else{
                $low=$p+1;
            }
        }

    }

    function partition(&$nums,$low,$high){
        $p=$nums[$low];

        while($low<$high){
            while($low<$high && $nums[$high]>=$p){
                $high--;
            }
            list($nums[$low],$nums[$high])=[$nums[$high],$nums[$low]];

            while($low<$high &&  $nums[$low]<=$p){
                $low++;
            }
            list($nums[$low],$nums[$high])=[$nums[$high],$nums[$low]];
        }

        return $low;
    }
}

$nums=[3,2,1,5,6,4];
$nums=[1];
$k=1;
print_r((new Solution())->findKthLargest($nums,$k));
