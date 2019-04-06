<?php
/**
 * User: zyp
 * Date: 2019-04-06
 * Time: 13:52
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
    function deleteNode($root, $key) {
        if($root == null) return null;      //树为空，直接返回空
        if($key < $root->val){                                      //待删除的节点在左子树中
            $root->left = $this->deleteNode($root->left, $key);     //root->left指向执行完递归删除操作后的左子树
            return $root;
        }else if($key > $root->val){
            $root->right = $this->deleteNode($root->right, $key);   //待删除的节点在右子树中
            return $root;
        }else{
            //已经找到待删除的节点，key == root->val
            if($root->left == null) return $root->right;            //该节点没有左子树，则可直接连接右子树
            if($root->right == null) return $root->left;            //该节点没有右子树，则可直接连接左子树
            //左右子树都存在，则需要后继节点（右子树最左节点）作为新的根
            $successor = $this->min($root->right);                  //寻找右子树最左节点
            $successor->right = $this->delMin($root->right);        //该节点的右子树连向去除节点后的重构右子树
            $successor->left = $root->left;                         //该节点左子树连向删除节点的左子树
            return $successor;
        }
    }
    public function min($node){
        //递归寻找最左节点
        if($node->left == null)
            return $node;
        return $this->min($node->left);
    }
    private function delMin($node){
        //重构右子树：递归寻找左子树，当寻找到最左节点时，把它的右子树连接到其父节点的左子树上
        if($node->left == null) return $node->right;
        $node->left = $this->delMin($node->left);
        return $node;
    }
}
