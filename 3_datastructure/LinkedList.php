<?php

  require_once 'Node.php';

  /**
   * doubley linked list class
   */
  class LinkedList
  {

    /**
    * @var reference
    */
    private $head;

    /**
    * @var reference
    */
    private $tail;

    /**
    * @var integer
    */
    private $count;

   /**
   * constructor to initilize the class variables
   */
    function __construct()
    {
      $this->head = null;
      $this->tail = null;
      $this->count = 0;
    }


    /**
    * function to get the number of nodes present in LinkedList
    * @return boolean
    */
    public function getLinkedListNodesCount()
    {
      return $this->count;
    }

    /**
    * function to add a node to head pointer
    * @param integer $data
    */
    public function addNodeToTail($data)
    {
      if (!(is_int($data))) {
        return;
      }
      $new_node = new Node($data);
      if ($this->head == null && $this->count == 0) {
        $this->head = $new_node;
        $this->tail = $new_node;
      }
      else {
        $this->tail->setNextPointer($new_node);
        $new_node->setPreviousPointer($this->tail);
        $this->tail = $new_node;
      }
      $this->count++;
    }

    /**
    * function to remove a node from a given position
    * @param integer $node_index
    * @return boolean
    */
    public function removeNodeByPoistion($node_index)
    {

      $return_value = false;

      if ((!(is_int($node_index))) || ($node_index < 0) ) {
        return false;
      }

      $temp = $this->head;
      if ($node_index == 0) { // if condition to remove head pointer
        $return_value = $this->removeHeadNode();
      } elseif ($node_index == ($this->count - 1)) { // if condition to remove tail pointer
        $return_value = $this->removeTailNode();
      } else { // check if the node to be removed is in the list or not
        $counter = 0;
        $temp = $this->head->getNextPointer();
        while ($temp->getNextPointer() != $this->tail) {
          if ($counter == $node_index) {
            $return_value = $this->removeInBetweenNode($temp);
          }
          $temp = $temp->getNextPointer();
          $counter++;
        } // end while loop
      } // end else
      return $return_value;
    } // end function removeNodeByPoistion

    /**
    * function to remove a node with a given value
    * @param integer $node_data
    * @return boolean
    */
    public function removeNodeByValue($node_data)
    {

      $return_value = false;

      if (!(is_int($node_data))) {
        return false;
      }

      $temp = $this->head;
      while ($temp != null) {
        if ($temp->getData() == $node_data) {
          if ($temp->getData() == $this->head->getData()) { // condition to check if the value to be removed is in head node
            $return_value = $this->removeHeadNode();
          }
          elseif (($temp->getData() == $this->tail->getData() && ($temp->getNextPointer() == null))) {// condition to check if the value to be removed is in tail node
            $return_value = $this->removeTailNode();
          }
          else { // if the value to be removed is in middle
            $return_value = $this->removeInBetweenNode($temp);
          }
        }
        $temp = $temp->getNextPointer();
      } // end while loop
      return $return_value;
    } // end function removeNodeByValue

    /**
    * function to print all linkedlist node data starting from head
    */
    public function printAllLinkedList()
    {
      $temp = $this->head;
      while ($temp != null) {
        echo $temp->getData() . ', ';
        $temp = $temp->getNextPointer();
      }
      echo PHP_EOL;
    }


    /**
    * function to remove head node
    * @return boolean
    */
    private function removeHeadNode()
    {
      $return_value = false;
      if ($this->head != null) {
        $old_head = $this->head;
        $this->head = $this->head->getNextPointer();
        $this->head->setPreviousPointer(null);
        $old_head = null;
        $this->count--;
        $return_value = true;
      }
      return $return_value;
    }

    /**
    * function to remove tail node
    * @return boolean
    */
    private function removeTailNode()
    {
      $return_value = false;
      if ($this->head == $this->tail) {
        $this->tail = null;
        $return_value = true;
      } elseif ($this->tail != null) {
        $new_tail = $this->tail->getPreviousPointer();
        $old_tail = $new_tail->getNextPointer();
        $old_tail = null;
        $new_tail->setNextPointer(null);
        $this->tail = $new_tail;
        $this->count--;
        $return_value = true;
      }
      return $return_value;
    }

    /**
    * function to remove node between head and tail
    * @param Node $node
    * @return boolean
    */
    private function removeInBetweenNode($node)
    {
      $return_value = false;

      if ($node->getNextPointer() != null && $node->getPreviousPointer() != null) {
        $previous_node = $node->getPreviousPointer();
        $next_node = $node->getNextPointer();
        $node = null;
        $previous_node->setNextPointer($next_node);
        $next_node->setPreviousPointer($previous_node);
        $node = $previous_node;
        $this->count--;
        $return_value = true;
      }
      return $return_value;
    }


  }  //end class Linked_list
?>
