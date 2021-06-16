<?php
require "model/bookManager.php";
require "model/entity/book.php";



$bookManager = new BookManager();
$books = new Book();
$books = $bookManager->getBooks();



require "view/indexView.php";
?>
