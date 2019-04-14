<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $count=count($strs);
        if($count==1){
            return $strs[0];
        }elseif ($count<1){
            return '';
        }

        $result=$strs[0];
        for($i=1;$i<$count;$i++){
            $right=$strs[$i];

            $tmp='';
            for ($j=0;$j<strlen($result);$j++){
                if(isset($right[$j]) && $right[$j]==$result[$j]) {
                    $tmp.=$result[$j];
                }else{
                    break;
                }
            }

            $result=$tmp;

        }
        return $result;
    }
}
