<?php require './config/newacc.php'; ?>
<form action="../views/inscription.php" method="POST">
<?php
            if(isset($error)){
                echo $error;
            }
        ?>
  <div class="mb-3">
    <label for="exampleInputEmail1"  class="form-label">Psuedo</label>
    <input type="text" name="psuedo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="mdp" class="form-control" id="exampleInputPassword1" require >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirmation</label>
    <input type="password" name="cofirm" class="form-control" id="exampleInputPassword1" require >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
