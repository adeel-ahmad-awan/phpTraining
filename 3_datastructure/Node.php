<?php

  /**
   * node class that holds data and pointer to be use in linkedlist
   */
  class Node
  {

    /**
    * @variable integer
    */
    private $data;

    /**
    * @variable reference
    */
    private $next;

    /**
    * @variable reference
    */
    private $previous;

    /**
    * constructor function for value itialization.
    */
    function __construct($data = 'not_assigned')
    {
      $this->data = $data;
      $this->next = null;
      $this->previous = null;
    }

    /**
    * setter function for setting the value of data
    * @parameter integer $data
    */
    public function setData($data)
    {
      $this->data = $data;
    }

    /**
    * getter function for getting the value of data
    * @returns integer
    */
    public function getData()
    {
      return $this->data;
    }

    /**
    * setter function for setting the value of "next" variable
    * @parameter reference $next
    */
    public function setNextPointer($next)
    {
      $this->next = $next;
    }

    /**
    * getter function for getting the value of "next" variable
    * @returns reference
    */
    public function getNextPointer()
    {
      return $this->next;
    }

    /**
    * setter function for setting the value of "previous" variable
    * @parameter reference $previous
    */
    public function setPreviousPointer($previous)
    {
      $this->previous = $previous;
    }

    /**
    * getter function for getting the value of "previous" variable
    * @returns reference
    */
    public function getPreviousPointer()
    {
      return $this->previous;
    }

  }
?>
