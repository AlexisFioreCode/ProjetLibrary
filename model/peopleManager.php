<?php

class PeopleManager {

  private PDO $db;

  public function __construct() {
      $this->db = new PDO('mysql:host=localhost;dbname=library_php', 'root', '');
  } 

  // Récupère tous les utilisateurs
  public function getUsers() {

  }

  // Récupère un utilisateur par son id
  public function getUserById() {
    
  }

  // Récupère un utilisateur par son code personnel
  public function getPeopleByCard_number(int $card_number) {
    $query= $this->db->prepare("SELECT * FROM people WHERE card_number=:card_number");
        $query->execute([
            "card_number" =>  $card_number
         ]);
        $response = $query->fetch(PDO::FETCH_ASSOC);
        $result = new People ($response);
        return $result;  
  }
}
