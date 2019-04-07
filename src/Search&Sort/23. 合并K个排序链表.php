<?php
/**
 * User: zyp
 * Date: 2019-04-07
 * Time: 16:20
 */

class Solution {
    function mergeKLists($lists) {
        $mh = new SplMinHeap();             //维持一个最小堆
        while ($lists) {                    //依次取出每一个链表
            $head = array_shift($lists);
            while ($head) {                 //遍历每一个链表
                $mh->insert($head->val);    //将链表中的值压入最小堆中
                $head = $head->next;
            }
        }
        //重构链表即可
        $dummyHead = new ListNode(null);
        $curNode = $dummyHead;
        while ($mh->valid()) {
            $newNode = new ListNode($mh->current());
            $curNode->next = $newNode;
            $curNode = $curNode->next;
            $mh->next();
        }
        return $dummyHead->next;
    }
}
