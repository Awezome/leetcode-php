<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function mergeTwoLists($l1, $l2) {
        $node=new ListNode(0);
        $p=$node;
        while($l1 && $l2){
            if($l1->val < $l2->val){
                $p->next=$l1;
                $l1=$l1->next;
            }else{
                $p->next=$l2;
                $l2=$l2->next;
            }
            $p=$p->next;
            $p->next=null;
        }

        if($l1==null){
            $p->next=$l2;
        }else{
            $p->next=$l1;
        }

        return $node->next;
    }
}
