<?php error_reporting(E_ALL^E_NOTICE);?>

 <?php
 $con= mysqli_connect('localhost','root','','project');


 mysqli_select_db($con,'project');

 $name=$_POST['username'];
 $password=$_POST['password'];
if(!empty($name) and !empty($password))
{

  $s=" SELECT   * from admin where admin='$name' && password ='$password' ";
  $result=mysqli_query($con,$s);

  $num=mysqli_num_rows($result);

  if($num==1){
    echo "<script>window.location='adminedit.php'</script> ";
  }else{
    echo " admin details not correct";
  }
}


  ?>
