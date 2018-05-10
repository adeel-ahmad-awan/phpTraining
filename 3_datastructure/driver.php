<?php

  require_once 'LinkedList.php';

  $linkedlist = new LinkedList;
  $linkedlist->addNodeToTail(9);
  $linkedlist->addNodeToTail(10);
  $linkedlist->addNodeToTail(12);
  $linkedlist->addNodeToTail(11);
  $linkedlist->addNodeToTail(10);
  $linkedlist->addNodeToTail(8);
  $linkedlist->addNodeToTail(45);
  $linkedlist->addNodeToTail(80);
  $linkedlist->addNodeToTail(67);
  $linkedlist->addNodeToTail(33);
  $linkedlist->addNodeToTail(43);
  $linkedlist->addNodeToTail(43);


  echo 'Node count = ' . $linkedlist->getLinkedListNodesCount() . ' ->  ';
  $linkedlist->printAllLinkedList();

  echo 'removing 10 node by value' . PHP_EOL;
  if ($linkedlist->removeNodeByValue(10)) {
    echo 'sucessfully removed' . PHP_EOL;
  }
  else {
    echo 'removal unsucessfull' . PHP_EOL;
  }

  echo 'Node count = ' . $linkedlist->getLinkedListNodesCount() . ' ->  ';
  $linkedlist->printAllLinkedList();


  echo 'removing 43 node by value' . PHP_EOL;
  if ($linkedlist->removeNodeByValue(43)) {
    echo 'sucessfully removed' . PHP_EOL;
  }
  else {
    echo 'removal unsucessfull' . PHP_EOL;
  }

  echo 'Node count = ' . $linkedlist->getLinkedListNodesCount() . ' ->  ';
  $linkedlist->printAllLinkedList();

  echo 'removing 99 node by value' . PHP_EOL;
  if ($linkedlist->removeNodeByValue(10)) {
    echo 'sucessfully removed' . PHP_EOL;
  }
  else {
    echo 'removal unsucessfull' . PHP_EOL;
  }

  echo 'Node count = ' . $linkedlist->getLinkedListNodesCount() . ' ->  ';
  $linkedlist->printAllLinkedList();

  echo 'removing 0 node by position' . PHP_EOL;
  if ($linkedlist->removeNodeByPoistion(0)) {
    echo 'sucessfully removed' . PHP_EOL;
  }
  else {
    echo 'removal unsucessfull' . PHP_EOL;
  }

  echo 'Node count = ' . $linkedlist->getLinkedListNodesCount() . ' ->  ';
  $linkedlist->printAllLinkedList();


  echo 'removing 6 node by position' . PHP_EOL;
  if ($linkedlist->removeNodeByPoistion(6)) {
    echo 'sucessfully removed' . PHP_EOL;
  }
  else {
    echo 'removal unsucessfull' . PHP_EOL;
  }

  echo 'Node count = ' . $linkedlist->getLinkedListNodesCount() . ' ->  ';
  $linkedlist->printAllLinkedList();


  echo 'removing -4 node by position' . PHP_EOL;
  if ($linkedlist->removeNodeByPoistion(-4)) {
    echo 'sucessfully removed' . PHP_EOL;
  }
  else {
    echo 'removal unsucessfull' . PHP_EOL;
  }

  echo 'Node count = ' . $linkedlist->getLinkedListNodesCount() . ' ->  ';
  $linkedlist->printAllLinkedList();


?>
