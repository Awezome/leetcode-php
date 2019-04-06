<?php
/**
 * Created by IntelliJ IDEA.
 * User: zyp
 * Date: 2019-03-31
 * Time: 16:03
 */
class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        if(!$digits){
            return [1];
        }

        $i=count($digits)-1;
        $digits[$i]++;
        while($i>=0){
            if($digits[$i]<10){
                break;
            }else{
                $digits[$i]-=10;

                if($i==0){
                    array_unshift($digits,1);
                }else{
                    $digits[$i-1]+=1;
                }
            }
        }
        return $digits;
    }
}

$map=array_fill(0,10,[]);
$maps = array(
    "rowsMap" => $map,
    "colsMap" => $map,
    "boxMap" => $map,
);

var_dump($maps);
