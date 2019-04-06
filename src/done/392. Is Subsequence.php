<?php
/**
 * Created by IntelliJ IDEA.
 * User: zyp
 * Date: 2019-03-31
 * Time: 11:26
 */
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isSubsequence($s, $t) {
        $len=strlen($s);
        $index=0;
        for($i=0;$i<$len;$i++){
            $pos=strpos($t,$s[$i],$index);
            if($pos===false){
                return false;
            }else{
                $index=$pos+1;
            }
        }

        return true;
    }
}
