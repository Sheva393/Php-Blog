<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>PHP</title>
  </head>
  <body>
    <?php require "blocks/header.php" ?>
  <div class="container mt-5" >
    <h3 class="mb-5">Наши статьи</h3>

      <div class="d-flex flex-wrap ">
        <?php
            for($i = 0; $i < 5 ; $i++):
         ?>
         <div class="card mb-4 shadow-sm">
             <div class="card-header">
               <h4 class="my-0 fw-normal">Text</h4>
             </div>
             <div class="card-body">
               <img src="img/<?php echo ($i + 1) ?>.jpg" class="img-thumbnail">
               <ul class="list-unstyled mt-3 mb-4">
                 <li>10 users included</li>
                 <li>2 GB of storage</li>
                  <li>Email support</li>
                 <li>Help center access</li>
               </ul>
               <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
             </div>
           </div>
           <?php
         endfor;
            ?>
      </div>
  </div>
  <?php require "blocks/footer.php" ?>
</body>
</html>
