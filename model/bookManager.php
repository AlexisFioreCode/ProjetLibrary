<?php

class BookManager {

  private PDO $db;

  public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=library_php', 'root', '');
  } 
  // Récupère tous les livres
  public function getBooks() {
    $response= $this->db->query("SELECT * FROM books");
        $result = $response->fetchAll(PDO::FETCH_ASSOC);

        foreach($result as $key => $book){
            $result[$key] = new Book($book);
        }
        return $result;      
  }

  // Récupère un livre
  public function getBook(int $book_id) {
    $query = $this->db->prepare("SELECT * FROM books WHERE id =:book_id  ");
        $query->execute([
            "book_id" => $book_id
        ]);
        $response = $query->fetch(PDO::FETCH_ASSOC);
        $result = new Book($response);
        return $result;
  }

  // Ajoute un nouveau livre
  public function addBook() {

  }

  // Met à jour le statut d'un livre emprunté
  public function updateBookStatus() {

  }

}
