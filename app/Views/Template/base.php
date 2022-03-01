<?php

use App\Controllers\Home;
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <title> <?= $this->renderSection('title') ?></title>
  </head>  
  <body> 


  <nav class="navbar navbar-light bg-light justify-content-between">
  <a class="navbar-brand">Gallery</a>
  <?php 
  
  if(session()->get("sucess")){
    ?>
    <h3><?= session()->get("sucess")  ?></h3>
    <?php

  }
  if(session()->get("error")){
    ?>
    <h3><?= session()->get("error")?></h3>
    <?php
  }
  
  ?>

  <form class="form-inline" method="POST" enctype ="multipart/form-data"  action="<?= base_url('Gallery/insert')?>">

    <input class="form-control mr-sm-2" name="username" type="text" placeholder="Enter The Name" aria-label="">
    <input  type="file" name="image" class="form-control" requried/ >
    <!-- <button class="btn btn-outline-success my-2 my-sm-0" name="submit" type="submit">Create</button> -->
    <button type ="submit" class="btn btn-primary">submit</button>
 
  
</nav>
</form>
                           

                          <div class="container">
                              <div class="row">
                          <?= $this->renderSection('content') ?>
</div>
                          </div>
   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html> 