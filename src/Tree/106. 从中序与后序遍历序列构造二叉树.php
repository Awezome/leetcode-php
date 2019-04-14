<?php
/**
 * User: zyp
 * Date: 2019-04-14
 * Time: 14:39
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
    function buildTree($inorder, $postorder) {
        return $this->build($postorder,0,count($postorder)-1,$inorder,0,count($inorder)-1);
    }

    function build($postOrder,$postStart,$postEnd,$inOrder,$inStart,$inEnd){
        if($postStart>$postEnd || $inStart>$inEnd){
            return null;
        }

        $node=new TreeNode($postOrder[$postEnd]);
        $i=array_search($node->val,$inOrder);
        /**
         * 住 i - inStart 是计算inorder中根节点位置和左边起始点的距离
         */
        $node->left=$this->build($postOrder,$postStart,$i-$inStart+$postStart-1,$inOrder,$inStart,$i-1);
        $node->right=$this->build($postOrder,$i-$inStart+$postStart,$postEnd-1,$inOrder,$i+1,$inEnd);
        return $node;
    }

}

$a=(new Solution())->buildTree([9,3,15,20,7],[9,15,7,20,3]);
