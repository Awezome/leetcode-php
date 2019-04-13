<?php
/**
 * User: zyp
 * Date: 2019-04-13
 * Time: 10:39
 */

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $len=strlen($s);
        $res=0;

        $map=[];
        for($i=0;$i<$len;$i++){
            if(!in_array($s[$i],$map)){
                $map[]=$s[$i];
                $res=max($res,count($map));
            }else{
                while ($t=array_shift($map)){
                    if($t==$s[$i]){
                        $map[]=$s[$i];
                        break;
                    }
                }
            }
        }

        return $res;
    }
}

(new Solution())->lengthOfLongestSubstring("pwwkew");
