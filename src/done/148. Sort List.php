<?php
/*

归并排序法：在动手之前一直觉得空间复杂度为常量不太可能，因为原来使用归并时，都是 O(N)的，需要复制出相等的空间来进行赋值归并。对于链表，实际上是可以实现常数空间占用的（链表的归并排序不需要额外的空间）。利用归并的思想，递归地将当前链表分为两段，然后merge，分两段的方法是使用 fast-slow 法，用两个指针，一个每次走两步，一个走一步，知道快的走到了末尾，然后慢的所在位置就是中间位置，这样就分成了两段。merge时，把两段头部节点值比较，用一个 p 指向较小的，且记录第一个节点，然后 两段的头一步一步向后走，p也一直向后走，总是指向较小节点，直至其中一个头为NULL，处理剩下的元素。最后返回记录的头即可。
主要考察3个知识点，
知识点1：归并排序的整体思想
知识点2：找到一个链表的中间节点的方法
知识点3：合并两个已排好序的链表为一个新的有序链表

归并排序的基本思想是：找到链表的middle节点，然后递归对前半部分和后半部分分别进行归并排序，最后对两个以排好序的链表进行Merge。
*/

class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val) { $this->val = $val; }
}
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function sortList($head) {
        return $this->mergeSort($head);
    }

    function mergeSort($head){
        if($head===null || $head->next===null){
            return $head;
        }

        /**
         * 拆分
         */
        $mid=$this->findMiddle($head);

        $left=$head;
        $right=$mid->next;
        $mid->next=null;

        /**
         * 递归拆分
         */
        $left=$this->mergeSort($left);
        $right=$this->mergeSort($right);

        /**
         * 合并
         */
        return $this->merge($left,$right);
    }

    function merge(ListNode $left,ListNode $right){
        $node=new ListNode(0);
        $p=$node;

        while($left && $right){
            if($left->val <= $right->val){

                /**
                 * 这个地方不需要new ListNode方式创建新的节点，这样会浪费多余的空间。
                 * 直接使用原有的节点就可以了
                 */

                $p->next=$left;
                $left=$left->next;
            }else{
                $p->next=$right;
                $right=$right->next;
            }

            $p=$p->next;
        }

        $p->next=($left===null)?$right:$left;

        return $node->next;
    }

    function findMiddle($head){
        if($head===null){
            return $head;
        }

        $fast=$head;
        $slow=$head;

        while($fast->next !== null && $fast->next->next !== null){
            $slow=$slow->next;
            $fast=$fast->next->next;
        }

        return $slow;
    }
}
