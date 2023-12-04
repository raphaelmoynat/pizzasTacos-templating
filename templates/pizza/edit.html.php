<form action="" method="post" class="form-control">

  <input value="<?= $pizza['name'] ?>" placeholder="type" type="text" name="nom" class="form-control">
  <input value="<?= $pizza['description'] ?>" placeholder="description" type="text" name="description"  class="form-control">
  <input value="<?= $pizza['image'] ?>" placeholder="poisson" type="text" name="image" class="form-control">
  <button name="id" value="<?= $pizza['id'] ?>" class="btn btn-primary" type="submit" >Envoyer</button>

</form>
