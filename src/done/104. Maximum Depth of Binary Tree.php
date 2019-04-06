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
     * @return Integer
     */
    function maxDepth($root) {
        if($root===null){
            return 0;
        }

        $lenLeft=$this->maxDepth($root->left);
        $lenRight=$this->maxDepth($root->right);

        return $lenLeft>$lenRight?$lenLeft+1:$lenRight+1;
    }
}
