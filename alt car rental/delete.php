
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
     <h1> Car details are </h1>

     <?php


         $con= mysqli_connect('localhost','root','','project');


         if(!$con)
         {
             die("Connection failed: " . mysqli_connect_error());
         }

         mysqli_select_db($con,'project');
          $sql=" SELECT * FROM car;";
          $result=mysqli_query($con,$sql);
          $resultcheck=mysqli_num_rows($result);
          $i=1;
          if ($resultcheck>0){
            while($row=mysqli_fetch_assoc($result)){
              echo $i;
              echo ")Car company\n",$row['Company'] ;
              echo "</br>";
              echo "car brand\n" ,$row['Brand'];
              echo "</br>";
              $i++;

            }
          }else{
              echo "0 results";
            }

          echo"  <form action='delete.php' method='post'>
              <div>
                    <input type='text' name='company' placeholder='Enter car company' required>
              </div>
              <div>
                    <input type='text' name='brand' placeholder='Enter car brand' required>
              </div>

                <button type='submit' >submit </button>
              </form>";
              if(isset($_POST['company'])){
                $company=$_POST['company'];
              }
              if(isset($_POST['brand'])){
                $brand=$_POST['brand'];
              }

        if(!empty($company) and !empty($brand))
        {
              $sql="DELETE FROM car, requested_vechile
                    USING car
                    INNER JOIN requested_vechile
                    WHERE Brand='$brand' and Company='$company'
                      AND requested_vechile.Unique_id = car.Unique_id";
              $result=mysqli_query($con,$sql);
              if (!$result){
                die( " error deleting");


              }else{
                echo " Record deleted";

              }
                  mysqli_close($con);

          }






      ?>

  </body>
</html>
