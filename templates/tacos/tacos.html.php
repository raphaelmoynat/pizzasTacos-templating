<div class="d-flex justify-content-center mt-3">

  <?php foreach ($tacos as $taco) :?>


    <div class='card mx-2' style='width: 18rem;'>
      <img src='<?= $taco['image'] ?>' class='card-img-top img' alt='#'>
      <div class='card-body'>
        <h5 class='card-title'><?= $taco['name'] ?></h5>
        <p class='card-text'><?= $taco['description'] ?></p>
        <form action="ficheTacos.php" method="post">
          <input type="hidden" name="tacosId" value="<?= $taco['id'] ?>">
          <button type="submit" class="btn btn-success">voir</button>
        </form>

      </div>
    </div>



  <?php endforeach; ?>

</div>
