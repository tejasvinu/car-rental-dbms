<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Car item inserted</h3>

    <form action="carinfo.php" method="post">

      <div>
        <input type="int" name="seats" placeholder="Enter number of seats" required>
      </div>
      <div>
        <input type="int" name="Cost" placeholder="Enter Cost " required>
      </div>
      <div>
        <input type="number" name="deposit" placeholder="Enter minimum deposit" required>
      </div>
      <button type="submit" >submit </button>


    </form>
       <?php error_reporting(E_ALL^E_NOTICE);?>
    <?php

    $con= mysqli_connect('localhost','root','','project');

    mysqli_select_db($con,'project');
    if(!$con)
    {
          die("Connection failed: " . mysqli_connect_error());
    }

    $seat=$_POST['seats'];
    $cost=$_POST['Cost'];
    $deposit=$_POST['deposit'];

  if(!empty($seat) and !empty($cost) and !empty($deposit))
  {
    $w= "SELECT Unique_id FROM car ORDER BY Unique_id DESC LIMIT 1";
    mysqli_query($con,$w);
     $result=mysqli_query($con,$w);
     while ($row = mysqli_fetch_assoc($result)) {
       $ins= $row['Unique_id'];
    }

      $insert=" INSERT into requested_vechile(Deposit,Status,Cost,Seats,Unique_id) values('$deposit','TRUE','$cost','$seat','$ins')";
      mysqli_query($con,$insert);
      echo" inserted";
      mysqli_close($con);

}






     ?>

  </body>
</html>
