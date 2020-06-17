<?php
include_once "Node.php";
class LinkedList
{
    private $count;
    private $firstNode;
    private $lastNode;

    public function __construct()
    {
        $this->count = 0;
        $this->firstNode = null;
        $this->lastNode = null;
    }

    public function addFirst($data)
    {
        $link = new Node($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;

        if ($this->lastNode == null) {
            $this->lastNode = $link;

            $this->count++;
        }
    }
    public function addLast($data)
    {
        if ($this->firstNode != null) {
            $link = new Node($data);
            $this->lastNode->next = $link;
            $link->next = null;
            $this->lastNode = $link;
            $this->count++;
        } else {
            $this->addFirst($data);
        }
    }

    public function remove($index)
    {
        $count = 0;
        $listData = array();
        $current = $this->firstNode;
        while ($current != null) {

            if ($count == $index) {
                $previous->next = $current->next;
            }
            $previous = $current;
            $current = $current->next;
            $count++;
        }
    }
    public function prinList()
    {
        $listData = array();
        $current = $this->firstNode;
        while ($current != null) {

            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }
    public function get($index)
    {
        $listData = array();
        $current = $this->firstNode;
        while ($current != null) {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData[$index];
    }

    public function size()
    {
        $listData = array();
        $current = $this->firstNode;
        while ($current != null) {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return count($listData);
    }

    public function clone()
    {
        $listData = array();
        $current = $this->firstNode;
        while ($current != null) {
            array_push($listData, $current->readNode());
            $current = $current->next;
            $listdatabase = $listData;
        }
        return $listdatabase;
    }

    public function contains($number)
    {
        $listData = array();
        $current = $this->firstNode;
        while ($current != null) {
            array_push($listData, $current->readNode());
            $current = $current->next ;
            if($current === $number) return true ;
            else return false ;
        }
        
    }
}



$linkedlist = new LinkedList();
$linkedlist->addFirst(10);
$linkedlist->addFirst(20);
$linkedlist->addLast(24);
$linkedlist->addLast(54);


echo  $linkedlist->contains(20) ? 'có pt' : 'ko có';


$listdata = $linkedlist->prinList();
echo implode('-', $listdata);
