<?php
require "layout/header.php";
?>

<a class="btn btn-dark text-white px-5 mb-5" href="index.php">Retour à l'acceuil</a>
<div class="row">
    <div class="col">
        <h2>Le livre</h2>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <?php if(is_array($book)): ?>
                <h5 class="card-title"><?php echo $book[0]->getBook_name(); ?></h5> 
                <p class="card-text"><?php echo $book[0]->getResume() ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo $book[0]->getWriter() ?></li>
                <li class="list-group-item"><?php echo $book[0]->getCreated_date() ?></li>
                <li class="list-group-item"><?php echo $book[0]->getCategory() ?></li>
            </ul>  
              <?php else : ?>
                    
                    <h5 class="card-title"><?php echo $book->getBook_name(); ?></h5> 
                <p class="card-text"><?php echo $book->getResume() ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo $book->getWriter() ?></li>
                <li class="list-group-item"><?php echo $book->getCreated_date() ?></li>
                <li class="list-group-item"><?php echo $book->getCategory() ?></li>
            </ul>  
              <?php endif ?>                
        <div class="card-body">
            <a class="btn btn-danger text-white px-5" href="">Changer son statut </a>
        </div>
    </div>
</div>

    <div class="col">
        <h2>La personne l'ayant emprunté</h2>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h4 class="card-title"><?php echo $book[1]->getfirstname() ?></h4>
                <h4 class="card-title"><?php echo $book[1]->getlastname() ?></h4>
            </div>
            <ul class="list-group list-group-flush">
                <h5><li class="list-group-item"><?php echo $book[1]->getCard_number() ?></li></h5>
                <li class="list-group-item"><?php echo $book[1]->getAdress() ?></li>
            </ul>
        </div>
    </div>  




<?php
require "layout/footer.php";
?>