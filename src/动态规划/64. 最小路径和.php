<?php
/**
 * User: zyp
 * Date: 2019-04-06
 * Time: 16:46
 */

class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function minPathSum($grid) {
        $memory=[];

        $h=count($grid);
        $w=count($grid[0]);
        for ($i=0;$i<$h;$i++){
            for($j=0;$j<$w;$j++){
                $t=0;
                if(isset($grid[$i][$j-1]) && isset($grid[$i-1][$j])){
                    $t=min($memory[$i][$j-1],$memory[$i-1][$j]);
                }elseif(isset($grid[$i][$j-1])){
                    $t=$memory[$i][$j-1];
                }elseif(isset($grid[$i-1][$j])){
                    $t=$memory[$i-1][$j];
                }
                $memory[$i][$j]=$grid[$i][$j]+$t;
            }
        }
        return $memory[$h-1][$w-1];
    }
}

(new Solution())->minPathSum([[1,3,1],[1,5,1],[4,2,1]]);
