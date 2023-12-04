<form action="" method="post" class="form-control">

  <input value="<?= $taco['name'] ?>" placeholder="nom" type="text" name="nom" class="form-control">
  <input value="<?= $taco['description'] ?>" placeholder="description" type="text" name="description"  class="form-control">
  <input value="<?= $taco['image'] ?>" placeholder="poisson" type="text" name="image" class="form-control">
  <button name="id" value="<?= $taco['id'] ?>" class="btn btn-primary" type="submit" >Envoyer</button>

</form>
