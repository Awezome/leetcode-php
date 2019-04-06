<?php

class Solution {

    /**
     * @param String $J
     * @param String $S
     * @return Integer
     */
    function numJewelsInStones($J, $S) {
        $l=strlen($J);
        $hash=[];
        for($i=0;$i<$l;$i++){
            $hash[$J[$i]]=true;
        }

        $len=strlen($S);
        $flag=0;
        for ($i=0;$i<$len;$i++){
            if(isset($hash[$S[$i]])){
                $flag++;
            }
        }
        return $flag;
    }

    function numJewelsInStones2($J, $S) {
        $len=strlen($S);

        $flag=0;
        for ($i=0;$i<$len;$i++){
           if(strpos($J,$S[$i])!==false){
               $flag++;
           }
        }
        return $flag;
    }
}
