<?php 
class Solution {
    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $i=0;
        $j=1;
        $count=count($prices);

        $res=0;
        while($i<$count && $j<$count){
            if($prices[$i]<$prices[$j]){
                $res += $prices[$j]-$prices[$i];
            }
            $i++;
            $j++;
        }
        return $res;
    }
}
