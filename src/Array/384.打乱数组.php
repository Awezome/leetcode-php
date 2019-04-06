<?php
/**
 * User: zyp
 * Date: 2019-04-06
 * Time: 09:42
 */
class Solution {
    private $old=[];
    private $new=[];
    /**
     * @param Integer[] $nums
     */
    function __construct($nums) {
        $this->old=$nums;
        $this->new=$nums;
    }

    /**
     * Resets the array to its original configuration and return it.
     * @return Integer[]
     */
    function reset() {
        return $this->old;
    }

    /**
     * Returns a random shuffling of the array.
     * @return Integer[]
     */
    function shuffle() {
        $count=count($this->new);
        for($i=0;$i<$count-1;$i++){
            $rand=mt_rand($i,$count-1);
            [$this->new[$i],$this->new[$rand]]=[$this->new[$rand],$this->new[$i]];
        }
        return $this->new;
    }
}

$nums=[1,2,3];
$obj = new Solution($nums);
$ret_1 = $obj->reset();
$ret_2 = $obj->shuffle();
print_r($ret_2);
