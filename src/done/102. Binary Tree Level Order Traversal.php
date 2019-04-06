<?php

//[3,9,20,null,null,15,7]
//[]

class TreeNode {
    public $val = null;
    public $left = null;
    public $right = null;
    function __construct($value) { $this->val = $value; }
}

function levelOrder(TreeNode $root){
    if(!$root){
        return [];
    }
    $flag=0;
    $queue[]=[$root,$flag];
    $result[$flag][]=$root->val;
    while($queue){
        $nodeArray=array_shift($queue);
        $node=$nodeArray[0];
        $newLevel=$nodeArray[1]+1;
        if($node->left!==null){
            $result[$newLevel][]=$node->left->val;
            $queue[]=[$node->left,$newLevel];
        }
        if($node->right!==null){
            $result[$newLevel][]=$node->right->val;
            $queue[]=[$node->right,$newLevel];
        }
    }
    return $result;
}

function levelOrder1(TreeNode $root) {
    if(!$root){
        return [];
    }
    $flag=0;
    $queue=[];
    array_push($queue,[$root]);
    $result[$flag][]=$root->val;
    while($queue){
        $tmp=[];
        $flag++;
        $level=array_shift($queue);
        foreach ($level as $v){
            if($v->left!==null){
                $result[$flag][]=$v->left->val;
                $tmp[]=$v->left;
            }

            if($v->right!==null){
                $result[$flag][]=$v->right->val;
                $tmp[]=$v->right;
            }
        }

        if($tmp){
            array_push($queue,$tmp);
        }
    }

    return $result;
}
