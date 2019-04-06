<?php
/**
 * User: zyp
 * Date: 2019-04-05
 * Time: 22:33
 */

class Solution {
    private $visited=[];
    /**
     * @param String[][] $grid
     * @return Integer
     */
    function numIslands($grid) {
        $flag=0;
        for($i=0;$i<count($grid);$i++){
            for($j=0;$j<count($grid[$i]);$j++){
                if($grid[$i][$j]==1 && !isset($this->visited[$i][$j])){
                    $this->dfs($grid,$i,$j);
                    $flag++;
                }
            }
        }
        return $flag;
    }

    function dfs($grid,$i,$j){
        if(isset($this->visited[$i][$j])){
            return ;
        }

        if($i<0 || $i>=count($grid)){
            return ;
        }

        if($j<0 || $j>=count($grid[$i])){
            return ;
        }

        if($grid[$i][$j]==0){
            return ;
        }

        $this->visited[$i][$j]=true;

        $this->dfs($grid,$i-1,$j);
        $this->dfs($grid,$i,$j-1);
        $this->dfs($grid,$i+1,$j);
        $this->dfs($grid,$i,$j+1);
    }
}

