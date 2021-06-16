<?php
require "layout/header.php";
?>

<h2 class="mb-5">Pour ajouter un nouveau livre dans notre catalogue</h2>

<a class="btn btn-dark text-white px-5 mb-5" href="index.php">Retour à l'acceuil</a>
<?php echo $error ?>
<form action="" method="post">
  <div class="mb-3">
    <label for="book_name" class="form-label">Nom du livre</label>
    <input type="text" class="form-control" name="book_name" required>
  </div>
  <div class="mb-3">
    <label for="writer" class="form-label">Auteur</label>
    <input type="text" class="form-control" name="writer" required>
  </div>
  <div class="mb-3">
    <label for="resume" class="form-label">Résumé</label>
    <input type="text" class="form-control" name="resume" required>
  </div>
  <div class="mb-3">
    <label for="created_date" class="form-label">Date de parution</label>
    <input type="text" class="form-control" name="created_date" required>
  </div>
  <div class="mb-3">
    <label for="category" class="form-label">Catégorie</label>
    <input type="text" class="form-control" name="category" required>
  </div>
  <button type="submit" class="btn btn-dark">Ajouter</button>
</form>


<?php
require "layout/footer.php";
?>