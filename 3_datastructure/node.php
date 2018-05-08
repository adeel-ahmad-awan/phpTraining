<?php

  /**
   * node class that holds data and pointer to be use in linkedlist
   */
  class Node
  {

    private $data;
    private $next;
    private $previous;

    function __construct($data = 'not_assigned')
    {
      $this->data = $data;
      $this->next = null;
      $this->previous = null;
    }

    public function set_data($data)
    {
      $this->data = $data;
    }

    public function get_data()
    {
      return $this->data;
    }

    public function set_next_pointer(&$next)
    {
      $this->next = $next;
    }

    public function get_next_pointer()
    {
      return $this->next;
    }

    public function set_previous_pointer(&$previous)
    {
      $this->previous = $previous;
    }

    public function get_previous_pointer()
    {
      return $this->previous;
    }


  } // end class Node
  //
  // $node = new Node;
  // echo $node->get_data() .'<br>';
  // $node->set_data(90);
  // echo $node->get_data() .'<br>';
  // $node->set_next_pointer(550);
  // echo $node->get_next_pointer() .'<br>';
  // $node->set_previous_pointer(980);
  // echo $node->get_previous_pointer() .'<br>';
  //
  //

?>
