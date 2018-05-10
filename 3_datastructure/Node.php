<?php

  /**
   * node class that holds data and pointer to be use in linkedlist
   */
  class Node
  {

    /**
    * @var integer
    */
    private $data;

    /**
    * @var reference
    */
    private $next;

    /**
    * @var reference
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
    * @param integer $data
    */
    public function setData($data)
    {
      $this->data = $data;
    }

    /**
    * getter function for getting the value of data
    * @return integer
    */
    public function getData()
    {
      return $this->data;
    }

    /**
    * setter function for setting the value of "next" variable
    * @param reference $next
    */
    public function setNextPointer($next)
    {
      $this->next = $next;
    }

    /**
    * getter function for getting the value of "next" variable
    * @return reference
    */
    public function getNextPointer()
    {
      return $this->next;
    }

    /**
    * setter function for setting the value of "previous" variable
    * @param reference $previous
    */
    public function setPreviousPointer($previous)
    {
      $this->previous = $previous;
    }

    /**
    * getter function for getting the value of "previous" variable
    * @return reference
    */
    public function getPreviousPointer()
    {
      return $this->previous;
    }

  }
?>
