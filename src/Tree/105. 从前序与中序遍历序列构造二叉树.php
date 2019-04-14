<?php
/**
 * User: zyp
 * Date: 2019-04-14
 * Time: 14:07
 */


class TreeNode {
    public $val = null;
    public $left = null;
    public $right = null;
    function __construct($value) { $this->val = $value; }
}

class Solution {

    /**
     * @param Integer[] $preorder
     * @param Integer[] $inorder
     * @return TreeNode
     */
    function buildTree($preorder, $inorder) {
        return $this->build($preorder,0,count($preorder)-1,$inorder,0,count($inorder)-1);
    }

    function build($preOrder,$preStart,$preEnd,$inOrder,$inStart,$inEnd){
        if($preStart>$preEnd || $inStart>$inEnd){
            return null;
        }

        $node=new TreeNode($preOrder[$preStart]);
        $i=array_search($node->val,$inOrder);
        /**
         * 住 i - inStart 是计算inorder中根节点位置和左边起始点的距离
         */
        $node->left=$this->build($preOrder,$preStart+1,$i-$inStart+$preStart,$inOrder,$inStart,$i-1);
        $node->right=$this->build($preOrder,$i-$inStart+$preStart+1,$preEnd,$inOrder,$i+1,$inEnd);
        return $node;
    }

}
