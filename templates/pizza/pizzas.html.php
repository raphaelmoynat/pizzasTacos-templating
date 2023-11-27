
<div class="row">

    <?php foreach ($pizzas as $pizza) :?>

    <div class="col-3 border border-dark">
        <p><strong><?= $pizza['name'] ?></strong></p>
        <p><?= $pizza['description'] ?></p>

        <form action="fichePizza.php" method="post">
            <input type="hidden" name="pizzaId" value="<?= $pizza['id'] ?>">
            <button type="submit" class="btn btn-success">voir</button>
        </form>

    </div>

    <?php endforeach; ?>

</div>