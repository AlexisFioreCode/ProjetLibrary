<?php
require "layout/header.php";
?>


<p>Vos livre au catalogue s'affichent sur cette page</p>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Titre du livre</th>
      <th scope="col">Auteur(e)</th>
      <th scope="col">Résumé</th>
      <th scope="col">Date de parution</th>
      <th scope="col">Disponible</th>
      <th scope="col">Prêté à</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php foreach($books as $book) ?>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>




<?php
require "layout/footer.php";
?>





