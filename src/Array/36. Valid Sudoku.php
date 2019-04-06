<?php

class Solution {

    /**
     * @param String[][] $board
     * @return Boolean
     */

    function isValidSudoku($board) {
        $map=array_fill(0,10,[]);
        $mapRow=$map;
        $mapCol=$map;
        $mapBox=$map;

        for($i=0; $i<9; ++$i){
            for($j=0; $j<9; ++$j){
                if($board[$i][$j] == "."){
                    continue;
                }

                $t=$board[$i][$j];
                //rows
                if(isset($mapRow[$i][$t])) {
                    return false;
                } else {
                    $mapRow[$i][$t] = 1;
                }


                //cols
                if(isset($mapCol[$j][$t])) {
                    return false;
                } else {
                    $mapCol[$j][$t] = 1;
                }

                //box
                $boxIndex = $this->boxIndex($i, $j);
                if(isset($mapBox[$boxIndex][$t])) {
                    return false;
                } else {
                    $mapBox[$boxIndex][$t] = 1;
                }
            }
        }
        return true;
    }

    private function boxIndex($i, $j) {
        return 3*floor($i/3) + floor($j/3);
    }
}
