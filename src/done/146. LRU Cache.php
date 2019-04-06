<?php

class Node
{
    public $prev;
    public $next;
    public $key;
    public $val;

    public function __construct($key=null, $val=null)
    {
        $this->key = $key;
        $this->val = $val;
    }

}

class LRUCache
{
    protected $capacity=0;
    protected $mapData = [];
    protected $head=[];
    protected $tail=[];

    function __construct($capacity)
    {

        $this->capacity = $capacity;

        $this->head = new Node();
        $this->tail = new Node();

        // 头尾两节点连接在一起
        $this->head->next = $this->tail;
        $this->tail->prev = $this->head;
    }

    public function get($key){
        $node=$this->getNodeByKey($key);
        return $node?$node->val:-1;
    }

    private function getNodeByKey($key){
        if (!isset($this->mapData[$key])) {
            return null;
        }

        $node = $this->mapData[$key];

        $this->removeNode($node);
        $this->putHeadAfter($node);

        return $node;
    }

    public function put($key, $value) {
        $node=$this->getNodeByKey($key);
        if($node){
            $node->val=$value;
            return;
        }

        if ($this->capacity === count($this->mapData)) {
            // 移除最后的一个节点
            $node = $this->tail->prev;
            $this->removeNode($node);
            unset($this->mapData[$node->key]);
        }

        $newNode = new Node($key, $value);
        $this->mapData[$key] = $newNode;
        $this->putHeadAfter($newNode);
    }

    protected function putHeadAfter(Node $node) {
        $next = $this->head->next;

        // 把之前连接的两个节点连接到新的节点
        $next->prev = $node;
        $this->head->next = $node;

        // 新节点内部连接到两边
        $node->next = $next;
        $node->prev = $this->head;
    }

    protected function removeNode(Node $node) {
        // 把当前节点从这个连接处移除
        $node->prev->next = $node->next;
        $node->next->prev = $node->prev;
    }

}
