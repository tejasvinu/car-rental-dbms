<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="insert.php" method="post" enctype="multipart/form-data">
      <h2>Enter Car details </h2>

      <div>
        <input type="text" name="company" placeholder="Enter Car Company" required>
      </div>
      <div>
        <input type="text" name="brand" placeholder="Enter brand" required>
      </div>


        <button type="submit" >submit </button>
     </form>

     <?php error_reporting(E_ALL^E_NOTICE);?>
     <?php
  

     $company=$_POST['company'];
     $brand=$_POST['brand'];


if(!empty($company) and !empty($brand))
{
     $con= mysqli_connect('localhost','root','','project');

     mysqli_select_db($con,'project');

     $s= " SELECT   * from car where Company='$company' && Brand ='$brand' ";
     $result=mysqli_query($con,$s);


     $num=mysqli_num_rows($result);
       if($num ==1){
         echo "car already present";
     }else{
       $ins=" INSERT into car(Company,Brand) values('$company','$brand')";
       mysqli_query($con,$ins);
       mysqli_close($con);

       echo "<script> window.location='carinfo.php' </script>";
     }

}
      ?>

  </body>
</html>
