<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */

class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val) { $this->val = $val; }
}

class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $flag=0;
        $node=new ListNode(0);
        $nodeFlag=$node;
        while(1){
            if($l1===null && $l2===null){
                break;
            }

            if($l1!==null){
                $flag+=($l1->val);
                $l1=$l1->next;
            }

            if($l2!==null){
                $flag+=($l2->val);
                $l2=$l2->next;
            }

            $nodeFlag->next=new ListNode($flag%10);
            $nodeFlag=$nodeFlag->next;

            $flag=(int)($flag/10);
        }

        $flag===1 && $nodeFlag->next=new ListNode(1);

        return $node->next;
    }
}
