<?php
/**
 * User: zyp
 * Date: 2019-04-05
 * Time: 19:58
 */

class Solution {

    /**
     * @param TreeNode $root
     * @return Boolean
     */
    function isValidBST($root) {
        if(!$root){
            return true;
        }

        if(isset($root->left) && $root->val<=$this->findMax($root->left)->val){
            // 根节点是否小于左子树中最大节点
            return false;
        }

        if(isset($root->right) && $root->val>=$this->findMin($root->right)->val){
            // 根节点是否大于右子树中最小节点
            return false;
        }

        $left=$this->isValidBST($root->left);
        $right=$this->isValidBST($root->right);

        return $left && $right;
    }

    /**
     *
     * 我们增加了两个辅助方法，用来寻找子树中最大的节点和最小的节点，实现的方法也比较简单，最大节点就是不断往右子树走，走到底，类似的，最小节点就是不断往左子结点走，走到底。这样寻找的依据是二叉搜索树的特点：

    节点的左子树只包含小于当前节点的数。
    节点的右子树只包含大于当前节点的数。
    所有左子树和右子树自身必须也是二叉搜索树。
    这里有点疑问的就是第三点了，万一哪一个子树不是二叉搜索树呢？那这样找出来的最大/小节点还是正确的吗？这个时候递归的优点就体现出来了，程序会不断缩小判断范围，直到范围缩小到一棵“小树”内，如果有一棵“小树”不满足定义，整棵树都会不满足，所以就算有一颗子树不是二叉搜索树，它迟早会被揪出来。
     * @param $root
     * @return mixed
     */


    function findMin($root){
        while($root->left!=null){
            $root=$root->left;
        }
        return $root;
    }

    function findMax($root){
        while($root->right!=null){
            $root=$root->right;
        }
        return $root;
    }
}
