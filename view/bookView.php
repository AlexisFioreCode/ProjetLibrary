<?php
require "layout/header.php";
?>

<a class="btn btn-dark text-white px-5 mb-5" href="index.php">Retour à l'acceuil</a>
<?php echo $error; ?>
<?php if(is_array($book)): ?>
<div class="row">
    <div class="col">
        <h2>Le livre</h2>       
        <div class="card" style="width: 18rem;">
            <div class="card-body">              
                <h5 class="card-title"><?php echo $book[0]->getBook_name(); ?></h5> 
                <p class="card-text"><?php echo $book[0]->getResume() ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo $book[0]->getWriter() ?></li>
                <li class="list-group-item"><?php echo $book[0]->getCreated_date() ?></li>
                <li class="list-group-item"><?php echo $book[0]->getCategory() ?></li>
            </ul>
            <div class="card-body">
            <a href="returnbook.php?index=<?php echo $book[0]->getId();?>" class="btn btn-danger text-white px-5" href="">Rendre le livre</a>
            </div>
        </div>
    </div>
    <div class="col">
        <h2>La personne l'ayant emprunté</h2>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h4 class="card-title">Prénom : <?php echo $book[1]->getfirstname() ?></h4>
                <h4 class="card-title">Nom de famille :<?php echo $book[1]->getlastname() ?></h4>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><h5>N° de carte : <?php echo $book[1]->getCard_number() ?></h5></li>
                <li class="list-group-item"><h5>Adresse : <?php echo $book[1]->getAdress() ?></h5></li>
            </ul>
        </div>
    </div> 
</div>          
<?php else : ?>
<div class="row">
    <div class="col">
        <h2>Le livre</h2>
        <div class="card" style="width: 18rem;">
            <div class="card-body">    
                <h5 class="card-title"><?php echo $book->getBook_name(); ?></h5> 
                <p class="card-text"><?php echo $book->getResume() ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo $book->getWriter() ?></li>
                <li class="list-group-item"><?php echo $book->getCreated_date() ?></li>
                <li class="list-group-item"><?php echo $book->getCategory() ?></li>
            </ul>
        </div>    
    </div>    
    <div class="col">
        <form action="" method="post">
            <div class="mb-3">
                <label for="card_number" class="form-label"><h2>N° de carte du client</h2></label>
                <input type="number" class="form-control" name="card_number" required>
            </div>
            <button type="submit" class="btn btn-dark">Louer le livre</button>
        </form> 
    </div>
</div>   
<?php endif ?>                       
         

      




<?php
require "layout/footer.php";
?>