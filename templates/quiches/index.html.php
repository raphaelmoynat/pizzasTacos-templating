

<div class=" mt-3">

  <?php foreach ($quiches as $quiche) :?>


    <div class='card mx-2' style='width: 18rem;'>
      <img src='<?= $quiche['image'] ?>' class='card-img-top img' alt='#'>
      <div class='card-body'>
        <h5 class='card-title'><?= $quiche['name'] ?></h5>
        <p class='card-text'><?= $quiche['description'] ?></p>
        <a href="quiche.php?id=<?= $quiche['id'] ?>" class="btn btn-warning">voir</a>
        <a href="deleteQuiche.php?id=<?= $quiche['id'] ?>" class="btn btn-danger">supprimer</a>
        <a href="editQuiche.php?id=<?= $quiche['id'] ?>" class="btn btn-warning">edit</a>

      </div>
    </div>



  <?php endforeach; ?>

</div>
