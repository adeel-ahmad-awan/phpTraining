<?php

  require_once 'LinkedList.php';

  $linkedlist = new LinkedList;
  $linkedlist->addNodeToTail(9);
  $linkedlist->addNodeToTail(10);
  $linkedlist->addNodeToTail(12);
  $linkedlist->addNodeToTail(11);
  $linkedlist->addNodeToTail(10);

  $linkedlist->printAllLinkedList();
  echo 'Node count = ' . $linkedlist->getLinkedListNodesCount() . PHP_EOL;

  if ($linkedlist->removeNodeByValue(10)) {
    echo 'sucessfully removed' . PHP_EOL;
  }
  else {
    echo 'removal unsucessfull' . PHP_EOL;
  }
  $linkedlist->printAllLinkedList();
  echo 'Node count = ' . $linkedlist->getLinkedListNodesCount() . PHP_EOL;

?>
