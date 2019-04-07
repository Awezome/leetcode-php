<?php
/**
 * User: zyp
 * Date: 2019-04-07
 * Time: 09:02
 */

/**
 * 入队时，将元素压入s1。
 * 出队时，判断s2是否为空，如不为空，则直接弹出顶元素；如为空，则将s1的元素逐个“倒入”s2，把最后一个元素弹出并出队。
 */

class MyQueue {
    /**
     * Initialize your data structure here.
     */

    protected $stack=[];
    protected $stackTemp=[];
    protected $stackSize=0;
    protected $stackTempSize=0;

    function __construct() {

    }

    /**
     * Push element x to the back of queue.
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        $this->stack[]=$x;
        $this->stackSize++;
    }

    /**
     * Removes the element from in front of queue and returns that element.
     * @return Integer
     */
    function pop() {
        if($this->stackTempSize==0){
            $this->pushToTemp();
        }

        if($this->stackTempSize>0){
            $this->stackTempSize--;
            return array_pop($this->stackTemp);
        }
        return -1;
    }

    /**
     * Get the front element.
     * @return Integer
     */
    function peek() {
        if($this->stackTempSize==0){
            $this->pushToTemp();
        }
        if($this->stackTempSize>0){
            return $this->stackTemp[$this->stackTempSize-1];
        }
        return -1;
    }

    /**
     * Returns whether the queue is empty.
     * @return Boolean
     */
    function empty() {
        return $this->stackSize + $this->stackTempSize ==0;
    }

    private function pushToTemp(){
        while($this->stack){
            $node=array_pop($this->stack);
            $this->stackSize--;

            array_push($this->stackTemp,$node);
            $this->stackTempSize++;
        }
    }
}


$obj = new MyQueue();
$obj->push(1);
$obj->push(2);
$ret_3 = $obj->peek();


echo $ret_3.PHP_EOL;
$ret_2 = $obj->pop();
echo $ret_2.PHP_EOL;
$ret_4 = $obj->empty();
echo $ret_4.PHP_EOL;
