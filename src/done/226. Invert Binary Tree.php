<?php
/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return TreeNode
     */
    function invertTree($root) {
        if($root===null){
            return null;
        }

        $t=new TreeNode($root->val);

        $left=$this->invertTree($root->right);
        if($left){
            $t->left=$left;
        }

        $right=$this->invertTree($root->left);
        if($right){
            $t->right=$right;
        }

        return $t;
    }
}