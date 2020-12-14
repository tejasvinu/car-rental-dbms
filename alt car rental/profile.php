<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1> Your profile Details are </h1>

    <?php
        session_start();
          $name=$_SESSION['name'];
          echo $name;


     ?>


  </body>
</html>
