<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Car Rental Portal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    </head>
    <body>
    <header id="header">
      <!--primary navigation-->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" >Car Renatal Service</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contact.php">Contact US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="histroy.php">View Histroy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="price.php">Price Check</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Log Out</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
</header>

<div class="container">
  <div class="row text-center py 5">
    <div class="col-md-3 col-sm-6 my-md-O">
      <div class="card=body">
        <div >
           <?php
            session_start();
            $con= mysqli_connect('localhost','root','','project');

                            if(!$con)
                            {
                                die("Connection failed: " . mysqli_connect_error());
                            }

            mysqli_select_db($con,'project');

            $s=" SELECT * from car";
            $result=mysqli_query($con,$s);

            $num=mysqli_num_rows($result);
              if($num ==0){
                echo "no car details present";
            }else{
              $i=1;
              if ($num>0){
                while($row=mysqli_fetch_assoc($result)){
                  echo $i;
                  echo ")Car company\n",$row['Company'] ;
                  echo "</br>";
                  echo "car brand\n" ,$row['Brand'];
                  echo "</br>";
                  $i++;

                }
            }
          }

            ?>
          <h3>For further details fill the form </h3>

        <form action="book.php" method ="post">
            <div>
              <input type="text" name="company" placeholder="Enter Car Company  " required >
              <input type="text" name="brand" placeholder="Enter Car Brand Name"required>
            </div>


            <button type="submit" >submit </button>
         </form>









      </div>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  </body>
</html>
