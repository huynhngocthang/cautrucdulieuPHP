<?php

class Stack {
    public $stack ;
    public $limit ;

    public function __construct()
    {
        $this->stack = array() ;
        $this->limit = 10 ;
    }

    public function Push($item) {
        if(count($this->stack)<$this->limit) {
            array_unshift($this->stack,$item) ;
        } else {
            throw new RuntimeException('Stack is full!') ;
        }
    }

    public function pop() {
        if ($this->isEmpty()) {
	      throw new RunTimeException('Stack is empty!');
	  } else {
            return array_shift($this->stack);
        }
    }
    public function isEmpty() {
        return empty($this->stack) ;
    }
    public function top() {
        return current($this->stack) ;
    }
    public function get() {
        return $this->stack ;
    }
    
    
}

$stacktest = new Stack() ;
 $stacktest->Push(1) ;
 $stacktest->Push(3) ;
 $stacktest->Push(5) ;
 $stacktest->Push(7) ;

 print_r( $stacktest->get()) ;
echo $stacktest->pop() ;
echo $stacktest->pop() ;

echo $stacktest->pop() ;
echo $stacktest->top() ;
echo $stacktest->top() ;


?>