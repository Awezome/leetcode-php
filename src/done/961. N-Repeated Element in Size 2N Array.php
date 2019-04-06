<?php
/**
 * Created by IntelliJ IDEA.
 * User: zyp
 * Date: 2019-03-21
 * Time: 18:17
 */
class Solution {

    /**
     * @param Integer[] $A
     * @return Integer
     */
    function repeatedNTimes($A) {
        $flag=[];
        foreach ($A as $v){
            if(isset($flag[$v])){
                return $v;
            }
            $flag[$v]=true;
        }
    }
}
