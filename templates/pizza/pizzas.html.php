
<div class="d-flex justify-content-center mt-3">

    <?php foreach ($pizzas as $pizza) :?>


        <div class='card mx-2' style='width: 18rem;'>
          <img src='<?= $pizza['image'] ?>' class='card-img-top img' alt='#'>
          <div class='card-body'>
            <h5 class='card-title'><?= $pizza['name'] ?></h5>
            <p class='card-text'><?= $pizza['description'] ?></p>
            <form action="fichePizza.php" method="post">
              <input type="hidden" name="pizzaId" value="<?= $pizza['id'] ?>">
              <button type="submit" class="btn btn-success">voir</button>
            </form>

          </div>
        </div>



    <?php endforeach; ?>

</div>

