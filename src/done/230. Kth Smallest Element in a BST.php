<?php 
/**
 * 中序遍历
 */
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
    private $res=0;

    /**
     * @param TreeNode $root
     * @param Integer $k
     * @return Integer
     */
    function kthSmallest($root, $k) {

        $this->m($root,$k);
        return $this->res;
    }

    function m($root,$k){
        if($root===null){
            return null;
        }

        $this->m($root->left,$k);

        $this->flag++;
        if($this->flag===$k){
            $this->res=$root->val;
            return;
        }

        $this->m($root->right,$k);
    }
}