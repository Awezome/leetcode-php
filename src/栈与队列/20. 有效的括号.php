<?php

//'('，')'，'{'，'}'，'['，']'

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $pair=[
            '('=>')',
            '['=>']',
            '{'=>'}',
        ];

        $stack=[];
        $len=strlen($s);

        for($i=0;$i<$len;$i++){
            $push=$s[$i];
            if(in_array($push,$pair)){
                $pop=array_pop($stack);
                if($pair[$pop]!=$push){
                    return false;
                }
            }elseif (isset($pair[$push])){
                $stack[]=$push;
                //array_push($stack,$push);
            }else{
                return false;
            }
        }

        return !$stack;

    }
}
