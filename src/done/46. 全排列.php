<?php
class Solution {

/**
 * @param Integer[] $nums
 * @return Integer[][]
 */
private $list=[];
private $res=[];

function permute($nums) {
    foreach ($nums as $v){
        $this->list[$v]=0;
    }
    $this->dfs($nums,[]);

    return $this->res;
}

function dfs($nums,$step){
    if(count($step)==count($nums)){
        $this->res[]=$step;
        return ;
    }

    foreach ($nums as $v){
        if($this->list[$v]){
            continue;
        }

        $this->list[$v]=1;
        $step[]=$v;
        $this->dfs($nums,$step);
        $this->list[$v]=0;
        array_pop($step);
    }
}
}
