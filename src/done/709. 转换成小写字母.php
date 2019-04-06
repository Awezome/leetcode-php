<?php
/**
 * Created by IntelliJ IDEA.
 * User: zyp
 * Date: 2019-03-18
 * Time: 11:25
 */
class Solution {

    /**
     * @param String $str
     * @return String
     */
    function toLowerCase($str) {
        $result='';
        $len=strlen($str);
        for($i=0;$i<$len;$i++){
            $t=$str[$i];
            $ascii=ord($t);
            if(65<=$ascii && $ascii<=90){
                $t=chr($ascii+32);
            }
            $result.=$t;
        }
        return $result;
    }
}
