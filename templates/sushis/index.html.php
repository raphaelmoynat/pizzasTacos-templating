

<div class=" mt-3">

  <?php foreach ($sushis as $sushi) :?>


    <div class='card mx-2' style='width: 18rem;'>
      <img src='' class='card-img-top img' alt='#'>
      <div class='card-body'>
        <h5 class='card-title'><?= $sushi['type'] ?></h5>
        <p class='card-text'><?= $sushi['description'] ?></p>
        <p class='card-text'><?= $sushi['poisson'] ?></p>
        <a href="sushi.php?id=<?= $sushi['id'] ?>" class="btn btn-warning">voir</a>
        <a href="deleteSushi.php?id=<?= $sushi['id'] ?>" class="btn btn-danger">supprimer</a>
        <a href="editSushi.php?id=<?= $sushi['id'] ?>" class="btn btn-warning">edit</a>

      </div>
    </div>



  <?php endforeach; ?>

</div>
