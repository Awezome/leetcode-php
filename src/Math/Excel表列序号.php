<?php
/**
 * User: zyp
 * Date: 2019-04-05
 * Time: 22:01
 */
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function titleToNumber($s) {
        $len=strlen($s);
        $res=0;
        for($i=0;$i<$len;$i++){
            $t=ord($s[$i])-ord('A')+1;
            $res+=$t*pow(26,$len-$i-1);
        }
        return $res;
    }
}

echo (new Solution())->titleToNumber('A');
