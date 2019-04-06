<?php
/**
 * Created by IntelliJ IDEA.
 * User: zyp
 * Date: 2019-03-31
 * Time: 17:17
 */
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function firstUniqChar($s) {
        if(!$s){
            return -1;
        }

        $array=str_split($s);
        $map=array_count_values($array);

        foreach($array as $k=>$v){
            if($map[$v]==1){
                return $k;
            }
        }

        return -1;
    }
}
