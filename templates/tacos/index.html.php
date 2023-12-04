<div class="d-flex justify-content-center mt-3">

  <?php foreach ($tacos as $taco) :?>


    <div class='card mx-2' style='width: 18rem;'>
      <img src='<?= $taco['image'] ?>' class='card-img-top img' alt='#'>
      <div class='card-body'>
        <h5 class='card-title'><?= $taco['name'] ?></h5>
        <p class='card-text'><?= $taco['description'] ?></p>
        <a href="tacos.php?id=<?= $taco['id'] ?>" class="btn btn-warning">voir</a>
        <a href="deleteTacos.php?id=<?= $taco['id'] ?>" class="btn btn-danger">supprimer</a>
        <a href="editTacos.php?id=<?= $taco['id'] ?>" class="btn btn-warning">edit</a>

      </div>
    </div>



  <?php endforeach; ?>

</div>
