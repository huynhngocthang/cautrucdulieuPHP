<?php
class MyList
{
    private $size ;
    private $element ;

    public function __construct()
    {
        $this->element = array() ;
        $this->size =count($this->element) ;
       
    }

   public function insert($index,$obj) {
        for($i=$this->size;$i>$index;$i--) {
            $this->element[$i]=$this->element[$i-1];
        }
        $this->element[$index] = $obj ;
        $this->size++ ;
        return $this->element ;
   }

   public function add($obj) 
   {
     array_push($this->element,$obj) ;
   }

   public function remove($index) {
        array_splice($this->element, $index, 1);
}
    public function get() {
       foreach($this->element as $index) {
           echo $index . '<br>';
       }
    }
    public function clear() {
        return array_pop($this->element[$this->index]) ;
    }

    public function indexof($obj) {
        if($this->element instanceof $obj) {
            return $this->element = $obj ;
        }
    }
    public function isEmty() {
        if( empty($this->element)) {
            return true ;
        } else{
            return false ;
        }
    }

    public function addAll($arr) {
        $this->element = array_push($arr) ;
    }
    public function sort() 
    {
        return sort($this->element,'abc') ;
    }
    function size() 
    {
        return $this->size ;
    }
}
$mylist = new MyList() ;
$mylist->add('nhật giác') ;
$mylist->add('phú giác') ;
$mylist->add('lê giác') ;
$mylist->get() ;
 $mylist->remove(2) ;
 $mylist->get() ;
 echo $mylist->isEmty() ? 'haha' : 'hihi';
 $mylist->insert(1,'nhật tiến') ;
 $mylist->get() ;
?>