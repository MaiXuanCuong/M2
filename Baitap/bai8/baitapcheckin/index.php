<?php
include_once('node.php');
include_once('linkedlist.php');

$linkedlist = new LinkedList();
$linkedlist->addFirst(10);
$linkedlist->addFirst(29);
$linkedlist->addLast(20);
$linkedlist->addLast(25);
$linkedlist->addLast(250);
// $linkedlist->removeFirst();
// $linkedlist->removeLast();
// print_r( $linkedlist->getLast());
print_r( $linkedlist->getFirst());
echo "<pre>";
print_r($linkedlist->head);





?>