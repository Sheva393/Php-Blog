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
   <div class="container mt-5">
     <h3>Контактная форма</h3>
     <form action="check.php" method="post">
       <input type="email" name="email" placeholder="Введите Email" class="form-control"><br>
       <textarea name="message" class="form-control" placeholder="Введите ваше сообщение"></textarea><br>
       <button type="submit" name="send" class="btn btn-success">Отправить</button>
     </form>
   </div>

   <?php require "blocks/footer.php" ?>
</body>
</html>
