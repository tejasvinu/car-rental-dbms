<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <h4>Car details are</h4>

 <?php error_reporting(E_ALL^E_NOTICE);?>
      <?php
      $con= mysqli_connect('localhost','root','','project');

      mysqli_select_db($con,'project');

      $s= " SELECT   * from car ";
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

    mysqli_close($con);


       ?>
  </body>
</html>
