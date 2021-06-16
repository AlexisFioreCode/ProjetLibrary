<?php

class BookManager {

  private PDO $db;

  public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=library_php2', 'root', '');
  } 
  // Récupère tous les livres
  public function getBooks() {
    $response= $this->db->query("SELECT * FROM books");
        $result = $response->fetchAll(PDO::FETCH_ASSOC);

        foreach($result as $key => $$book){
            $result[$key] = new Book($book);
        }
        return $result;      
  }

  // Récupère un livre
  public function getBook() {

  }

  // Ajoute un nouveau livre
  public function addBook() {

  }

  // Met à jour le statut d'un livre emprunté
  public function updateBookStatus() {

  }

}
