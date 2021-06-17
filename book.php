<?php

require "model/bookManager.php";
require "model/entity/book.php";
require "model/peopleManager.php";
require "model/entity/people.php";
// Controleur qui gère l'affichage du détail d'un livre

$bookManager = new BookManager();

if(isset($_GET["index"]) && !empty($_GET["index"])) {
   $book= $bookManager->getBook($_GET["index"]); 
}


require "view/bookView.php";
?>