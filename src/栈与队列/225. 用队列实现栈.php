<?php
/**
 * User: zyp
 * Date: 2019-04-07
 * Time: 09:54
 */
class MyStack {
    /**
     * Initialize your data structure here.
     */

    public $queueLeft=[];
    public $queueRight=[];

    function __construct() {

    }

    /**
     * Push element x onto stack.
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        $countLeft=count($this->queueLeft);
        $countRight=count($this->queueRight);

        if($countLeft==0 && $countRight==0){
            $this->queueLeft[]=$x;
        }elseif ($countLeft>0){
            $this->queueLeft[]=$x;
        }elseif ($countRight>0){
            $this->queueRight[]=$x;
        }
    }

    /**
     * Removes the element on top of the stack and returns that element.
     * @return Integer
     */
    function pop() {
        $countLeft=count($this->queueLeft);

        if($countLeft>0){
            $this->transfer($this->queueLeft,$this->queueRight);
            return array_shift($this->queueLeft);
        }else{
            $this->transfer($this->queueRight,$this->queueLeft);
            return array_shift($this->queueRight);
        }
    }

    /**
     * Get the top element.
     * @return Integer
     */
    function top() {
        $countLeft=count($this->queueLeft);

        if($countLeft>0){
            $this->transfer($this->queueLeft,$this->queueRight);
            $node=array_shift($this->queueLeft);
            $this->queueRight[]=$node;
        }else{
            $this->transfer($this->queueRight,$this->queueLeft);
            $node=array_shift($this->queueRight);
            $this->queueLeft[]=$node;
        }

        return $node;
    }

    private function transfer(&$from,&$to){
        while (count($from)>1){
            $node=array_shift($from);
            array_push($to,$node);
        }
    }

    /**
     * Returns whether the stack is empty.
     * @return Boolean
     */
    function empty() {
        return count($this->queueLeft)+count($this->queueRight)==0;
    }
}

$obj = new MyStack();
$obj->push(1);
$obj->push(2);
$ret_3 = $obj->top();
$ret_2 = $obj->pop();

