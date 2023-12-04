<form action="" method="post" class="form-control">

  <input value="<?= $quiche['name'] ?>" placeholder="nom" type="text" name="nom" class="form-control">
  <input value="<?= $quiche['description'] ?>" placeholder="description" type="text" name="description"  class="form-control">
  <input value="<?= $quiche['image'] ?>" placeholder="image" type="text" name="image" class="form-control">
  <button name="id" value="<?= $quiche['id'] ?>" class="btn btn-primary" type="submit" >Envoyer</button>

</form>
