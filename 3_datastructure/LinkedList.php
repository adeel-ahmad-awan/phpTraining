<?php

  require_once 'Node.php';

  /**
   * doubley linked list class
   */
  class LinkedList
  {

    /**
    * head pointer for holding the head of the LinkedList
    * tail pointer for holding the tail of the LinkedList
    * count variable stores the total number of elements in LinkedList
    */
    private $head;
    private $tail;
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
    * function to remove head node
    * @returns boolean
    */
    private function removeHeadNode()
    {
      $return_value = false;
      if ($this->head != null) {
        $temp = $this->head;
        $this->head = $this->head->getNextPointer();
        $this->head->setPreviousPointer(null);
        $temp->setNextPointer(null);
        $temp = null;
        $this->count--;
        $return_value = true;
      }
      return $return_value;
    } // end function removeHeadNode

    /**
    * function to remove tail node
    * @returns boolean
    */
    private function removeTailNode()
    {
      $return_value = false;
      if ($this->head == $this->tail) {
        $this->tail = null;
        $return_value = true;
      } elseif ($this->tail != null) {
        $temp = $this->tail->getPreviousPointer();
        $temp2 = $temp->getNextPointer();
        $temp2 = null;
        $temp->setNextPointer(null);
        $this->tail = $temp;
        $this->count--;
        $return_value = true;
      }
      return $return_value;
    } // end function removeTailNode


    /**
    * function to remove node between head and tail
    * @parameter Node $temp
    * @returns boolean
    */
    private function removeInBetweenNode(&$temp)
    {
      $return_value = false;

      if ($temp->getNextPointer() != null && $temp->getPreviousPointer() != null) {
        $temp_previous_node = $temp->getPreviousPointer();
        $temp_next_node = $temp->getNextPointer();
        $temp = null;
        $temp_previous_node->setNextPointer($temp_next_node);
        $temp_next_node->setPreviousPointer($temp_previous_node);
        $temp = $temp_previous_node;
        $this->count--;
        $return_value = true;
      }
      else {
        $return_value = false;
      }

      return $return_value;
    } // end function removeTailNode


    /**
    * function to get the number of nodes present in LinkedList
    * @returns boolean
    */
    public function getLinkedListNodesCount()
    {
      return $this->count;
    }

    /**
    * function to add a node to head pointer
    * param integer $node_data_value
    */
    public function addNodeToTail($node_data_value)
    {
      if (!(is_int($node_data_value))) {
        return;
      }
      $new_node = new Node($node_data_value);
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
    * @parameter integer $node_index_value
    * @returns boolean
    */
    public function removeNodeByPoistion($node_index_value)
    {

      $return_value = false;

      if (!(is_int($node_index_value))) {
        return false;
      }
      if ($node_index_value < 0) {
        return false;
      }
      $temp = $this->head;
      $counter = 0;

      if ($node_index_value == 0) { // if condition to remove head pointer
        $return_value = $this->removeHeadNode();
      }
      elseif ($node_index_value == ($this->count - 1)) { // if condition to remove tail pointer
        $return_value = $this->removeTailNode();
      }
      else { // check if the node to be removed is in the list or not
        $temp_counter = 0;
        while ($temp->getNextPointer() != null) {
          if ($temp_counter == $node_index_value) {
            $return_value = $this->removeInBetweenNode($temp);
          }
          $temp = $temp->getNextPointer();
          $temp_counter++;
        } // end while loop
      } // end else
      return $return_value;
    } // end function removeNodeByPoistion

    /**
    * function to remove a node with a given value
    * @parameter integer $node_data_value
    * @returns boolean
    */
    public function removeNodeByValue($node_data_value)
    {

      $return_value = false;

      if (!(is_int($node_data_value))) {
        return false;
      }

      $temp = $this->head;
      while ($temp != null) {
        if ($temp->getData() == $node_data_value) {
          if ($temp->getData() == $this->head->getData()) { // if condition to check if the value to be removed is in head node
            $return_value = $this->removeHeadNode();
          }
          elseif (($temp->getData() == $this->tail->getData() && ($temp->getNextPointer() == null))) {// if condition to check if the value to be removed is in tail node
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
    * function to print all linkedlist node data values starting from head
    */
    public function printAllLinkedList()
    {
      $temp = $this->head;
      while ($temp != null) {
        echo $temp->getData() . ' ';
        $temp = $temp->getNextPointer();
      }
      echo PHP_EOL;
    }

  }  //end class Linked_list
?>
