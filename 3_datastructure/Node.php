<?php

  /**
   * node class that holds data and pointer to be use in linkedlist
   */
  class Node
  {

    /**
    * private variable for node class
    * data variable for holding the data for linked list. in this case its simple var
    * next variable for holding the address of the next node in linkedlist
    * previous variable for holding the address of the previous node in linkedlist
    */
    private $data;
    private $next;
    private $previous;

    /**
    * constructor function for value itialization.
    * takes one argument for setting data variable
    * by default data variable holds "not_assigned" value
    * by default the next and previous pointers are set to "null"
    */
    function __construct($data = 'not_assigned')
    {
      $this->data = $data;
      $this->next = null;
      $this->previous = null;
    }

    /**
    * setter function for setting the value of data
    */
    public function setData($data)
    {
      $this->data = $data;
    }

    /**
    * getter function for getting the value of data
    */
    public function getData()
    {
      return $this->data;
    }

    /**
    * setter function for setting the value of "next" variable
    */
    public function setNextPointer($next)
    {
      $this->next = $next;
    }

    /**
    * getter function for getting the value of "next" variable
    */
    public function getNextPointer()
    {
      return $this->next;
    }

    /**
    * setter function for setting the value of "previous" variable
    */
    public function setPreviousPointer($previous)
    {
      $this->previous = $previous;
    }

    /**
    * getter function for getting the value of "previous" variable
    */
    public function getPreviousPointer()
    {
      return $this->previous;
    }


  }

?>
