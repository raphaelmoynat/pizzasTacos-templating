<div class="d-flex justify-content-center mt-3">

  <?php foreach ($quiches as $quiche) :?>


    <div class='card mx-2' style='width: 18rem;'>
      <img src='<?= $quiche['image'] ?>' class='card-img-top img' alt='#'>
      <div class='card-body'>
        <h5 class='card-title'><?= $quiche['name'] ?></h5>
        <p class='card-text'><?= $quiche['description'] ?></p>
        <form action="ficheQuiche.php" method="post">
          <input type="hidden" name="quicheId" value="<?= $quiche['id'] ?>">
          <button type="submit" class="btn btn-success">voir</button>
        </form>

      </div>
    </div>



  <?php endforeach; ?>

</div>
