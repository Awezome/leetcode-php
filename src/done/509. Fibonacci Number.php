<?php

class Solution {
    private $cache=[];

    function fib($N) {
        if($N == 0 || $N==1){
            return $N;
        }

        if(!isset($this->cache[$N-1])){
            $this->cache[$N-1]=$this->fib($N-1);
        }

        if(!isset($this->cache[$N-2])){
            $this->cache[$N-2]=$this->fib($N-2);
        }

        unset($this->cache[$N-3]);
        return $this->cache[$N-1] + $this->cache[$N-2];
    }
}
