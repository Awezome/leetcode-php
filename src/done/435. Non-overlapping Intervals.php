<?php

/**
 * Definition for an interval.
 * class Interval {
 *     public $start = 0;
 *     public $end = 0;
 *     function __construct(int $start = 0, int $end = 0) {
 *         $this->start = $start;
 *         $this->end = $end;
 *     }
 * }
 */
class Solution {

    /**
     * @param Interval[] $intervals
     * @return Integer
     */
    function eraseOverlapIntervals($intervals) {
        usort($intervals,function($a,$b){
            return $a->end > $b->end;
        });

        $i=0;
        $flag=0;
        $count=count($intervals);
        while ($i<$count){
            for($j=$i;$j<$count;$j++){
                if($intervals[$i]->end <= $intervals[$j]->start ){
                    break;
                }else{
                    $flag+=1;
                }
            }
            $i=$j;
        }

        return $flag;
    }
}



$a=[
    ['a'=>2,'b'=>4],
    ['a'=>1,'b'=>7],
];


usort($a,function($a,$b){
    return $a['a'] > $b['a'];
});

print_r($a);
