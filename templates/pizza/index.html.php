

<div class=" mt-3">

  <?php foreach ($pizzas as $pizza) :?>


    <div class='card mx-2' style='width: 18rem;'>
      <img src='<?= $pizza['image'] ?>' class='card-img-top img' alt='#'>
      <div class='card-body'>
        <h5 class='card-title'><?= $pizza['name'] ?></h5>
        <p class='card-text'><?= $pizza['description'] ?></p>
        <a href="pizza.php?id=<?= $pizza['id'] ?>" class="btn btn-warning">voir</a>
        <a href="deletePizza.php?id=<?= $pizza['id'] ?>" class="btn btn-danger">supprimer</a>
        <a href="editPizza.php?id=<?= $pizza['id'] ?>" class="btn btn-warning">edit</a>

      </div>
    </div>



  <?php endforeach; ?>

</div>
