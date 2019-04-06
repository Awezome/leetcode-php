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
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList($head) {
        $p = $head;
        $prev = null;
        while ($p != null) {
            $tmp = $p->next;
            $p->next = $prev;
            $prev = $p;
            $p = $tmp;
        }
        return $prev;
    }
}