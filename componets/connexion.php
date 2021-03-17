<?php require './config/traitement.php';
 ?>
<form action="/index.php"  method="POST">
  <?php
    if (isset($error )){
      echo $error;
  }
  ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Psuedo</label>
    <input type="text" class="form-control" name="verlog" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="logpass" class="form-control" id="exampleInputPassword1">
    <div id="emailHelp" class="form-text"><a href="../views/inscription.php">S'inscrire</a></div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>