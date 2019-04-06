<?php
/**
 * User: zyp
 * Date: 2019-04-06
 * Time: 16:23
 */
class Solution {

    /**
     * @param Integer[][] $triangle
     * @return Integer
     */
    function minimumTotal($triangle) {
        $memory=[];
        $memory[0][0]=$triangle[0][0];

        $n=count($triangle);
        for ($i=1;$i<$n;$i++){
            for($j=0;$j<=$i;$j++){
                if(isset($memory[$i-1][$j-1]) && isset($memory[$i-1][$j])){
                    $memory[$i][$j]=min($memory[$i-1][$j-1],$memory[$i-1][$j]);
                }elseif (isset($memory[$i-1][$j-1])){
                    $memory[$i][$j] =$memory[$i-1][$j-1];
                }else{
                    $memory[$i][$j] = $memory[$i-1][$j];
                }
                $memory[$i][$j]+=$triangle[$i][$j];
            }
        }

        return min($memory[$n-1]);
    }
}

$k=[[2],[3,4],[6,5,7],[4,1,8,3]];
print_r((new Solution())->minimumTotal($k));
