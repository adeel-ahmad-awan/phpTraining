<?php

  require_once 'LinkedList.php';

  $linkedlist = new LinkedList;
  $linkedlist->addNode(2);
  $linkedlist->addNode(4);
  $linkedlist->addNode(4);
  $linkedlist->addNode(9);
  $linkedlist->addNode(8);
  $linkedlist->printAllLinkedList();
  $linkedlist->addNode(9.12);
  $linkedlist->printAllLinkedList();

  // if ($linkedlist->removeNodeByValue(8)) {
  //   echo 'sucessfully removed' . "\n";
  // }
  // else {
  //   echo 'removal unsucessfull' . "\n";
  // }
  // $linkedlist->printAllLinkedList();

?>
