<?php

class PeopleManager {

  private PDO $db;

  public function __construct() {
      $this->db = new PDO('mysql:host=localhost;dbname=library_php2', 'root', '');
  } 

  // Récupère tous les utilisateurs
  public function getUsers() {

  }

  // Récupère un utilisateur par son id
  public function getUserById() {

  }

  // Récupère un utilisateur par son code personnel
  public function getUser() {

  }
}
