<?php
class RecentCounter {

private $queue;

function __construct() {
    $this->queue = [];
}

function ping($t) {
    array_push($this->queue, $t);
     while (count($this->queue) > 0  && $this->queue[0] < $t - 3000) {
         print_r($this->queue[0]);
         array_shift($this->queue);
     }

     return count($this->queue);
}
}