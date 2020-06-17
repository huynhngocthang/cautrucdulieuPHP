<?php

class ArrayList {
    public $arraylist ;
   

   public function ArrayList($arr = '') {
        if(is_array($arr) == true) {
            $this->arraylist = $arr ;
        }
        else {
            $this->arraylist = array() ;
        }
   }

   public function add($obj) {
       array_push($this->arraylist,$obj) ;
   }

   public function get($index) {
       if(is_integer($index ) && $index < count($this->arraylist) ) {
            return $this->arraylist[$index] ;
       } else {
           die('ERROR in ArrayList.get') ;
       }
   }

   public function is_integer($tocheck) {
        return preg_match("/^[0-9]+$/",$tocheck) ;
   }
}
$listInt = new ArrayList() ;
$listInt->add(1);
$listInt->add(2);
$listInt->add(3);
echo $listInt->get(0) . "<br>" ;
echo $listInt->get(6) ;





?>