<?php
require "layout/header.php";
?>


<h1 class="my-5">Les livres présents dans le catalogue de la bibliothèque</h1>
<a class="btn btn-dark text-white px-5 mb-5" href="addbook.php">Ajouter un livre </a>
<table class="table table-striped ">
  <thead>
    <tr>
      <th scope="col">Titre du livre</th>
      <th scope="col">Auteur(e)</th>
      <th scope="col">Date de parution</th>
      <th scope="col">Catégorie</th>
      <th scope="col">Disponible</th>
      <th scope="col">Voir le livre</th>
      <th scope="col">Supprimer un livre</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php foreach($books as $book): ?>
        <th scope="row"><?php echo $book->getBook_name(); ?></th>
        <td><?php echo $book->getWriter(); ?></td>
        <td><?php echo $book->getCreated_date(); ?></td>
        <td><?php echo $book->getCategory(); ?></td>
        <td><?php if ($book->getBorrowed() == "no"): ?>
            <i class="fas fa-check-circle"></i>
            <?php else: ?>
            <i class="fas fa-times-circle"></i>
        <?php endif ?></td>
       <td><a class="btn btn-dark text-white px-5" href="book.php?index=<?php echo $book->getId(); ?>">Voir</a></td> 
       <?php if ($book->getBorrowed() == "no"): ?>
       <td><a class="btn btn-danger text-white px-5" href="deletebook.php?index=<?php echo $book->getId();?>">Supprimer du catalogue </a></td>
       <?php else: ?>
        <td><h5>Impossible le livre est emprunté</h5></td>
       <?php endif ?>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>





<?php
require "layout/footer.php";
?>





