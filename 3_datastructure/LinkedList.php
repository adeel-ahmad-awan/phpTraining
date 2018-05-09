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
   * constructor to initilize the head pointer
   * by default head and tail value would be null
   * by default count value would be zero
   */
    function __construct()
    {
      $this->head = null;
      $this->tail = null;
      $this->count = 0;
    }

    /**
    * function to add a node to head pointer
    */
    public function addNode($node_data_value)
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
        $temp = $this->head;
        while ($temp->getNextPointer() != null) {
          $temp = $temp->getNextPointer();
        }
        $temp->setNextPointer($new_node);
        $new_node->setPreviousPointer($temp);
        $this->tail = $new_node;
      }
      $this->count++;
    }

    /**
    * function to remove a node from a given position
    * return true or false depending on the sucess of function
    * value 0 will remove first node, 1 will remove second node and so on...
    * function will return false if a non integer value is passed
    */
    public function removeNodeByPoistion($node_index_value)
    {
      if (!(is_int($node_index_value))) {
        return false;
      }
      if ($node_index_value < 0) {
        return false;
      }
      $temp = $this->head;
      $counter = 0;

      if ($node_index_value == 0) { // if condition to remove head pointer
        $this->head = $this->head->getNextPointer();
        $this->head->setPreviousPointer(null);
        $temp->setNextPointer(null);
        $temp = null;
        return true;
      }
      elseif ($node_index_value == ($this->count - 1)) { // if condition to remove tail pointer
        while ($temp->getNextPointer() != null) {
          $temp = $temp->getNextPointer();
        }
        $temp = $temp->getPreviousPointer();
        $temp2 = $temp->getNextPointer();
        $temp2 = null;
        $temp->setNextPointer(null);
        return true;
      }
      else { // check if the node to be removed is in the list or not
        $temp_counter = 0;
        while ($temp->getNextPointer() != null) {
          if ($temp_counter == $node_index_value) {
            $temp_previous_node = $temp->getPreviousPointer();
            $temp_next_node = $temp->getNextPointer();
            $temp = null;
            $temp_previous_node->setNextPointer($temp_next_node);
            $temp_next_node->setPreviousPointer($temp_previous_node);
            return true;
          }
          $temp = $temp->getNextPointer();
          $temp_counter++;
        } // end while loop
      } // end else
      return false;
    } // end function removeNodeByPoistion

    /**
    * function to remove a node with a given value
    * return true or false depending on the sucess of function
    * function will return false if a non integer value is passed
    */
    public function removeNodeByValue($node_data_value)
    {
      if (!(is_int($node_data_value))) {
        return false;
      }

      $return_value = false;
      $temp = $this->head;
      while ($temp != null) {
        if ($temp->getData() == $node_data_value) {
          if ($temp->getData() == $this->head->getData()) { // if condition to check if the value to be removed is in head node
            $temp_next_node = $temp->getNextPointer();
            $temp = null;
            $temp_next_node->setPreviousPointer(null);
            $temp = $temp_next_node;
            $this->head = $temp;
            $return_value = true;
          }
          elseif ($temp->getData() == $this->tail->getData()) {// if condition to check if the value to be removed is in tail node
            $temp_previous_node = $temp->getPreviousPointer();
            $temp = null;
            $temp_previous_node->setNextPointer(null);
            $temp = $temp_previous_node;
            $this->tail = $temp;
            $return_value = true;
          }
          else { // if the value to be removed is in middle
            $temp_previous_node = $temp->getPreviousPointer();
            $temp_next_node = $temp->getNextPointer();
            $temp_previous_node->setNextPointer($temp_next_node);
            $temp_next_node->setPreviousPointer($temp_previous_node);
            $temp = null;
            $temp = $temp_previous_node;
            $return_value = true;
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
      echo "\n";
    }

  }  //end class Linked_list

?>
