<?php
/**
 * Created by IntelliJ IDEA.
 * User: zyp
 * Date: 2019-03-31
 * Time: 12:27
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $count=count($nums);
        $i=1;

        while($i<$count){
            if($nums[$i]==$nums[$i-1]){
                for($j=$i;$j<$count-1;$j++){
                    $nums[$j]=$nums[$j+1];
                }
                unset($nums[$count-1]);
                $count--;
            }else{
                $i++;
            }
        }

        return $count;
    }
}
