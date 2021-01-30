<?php

$con= mysqli_connect('localhost','root','','project');



if(isset($_POST['id'])){
    $_GET['id']=$_POST['id'];
}
 $u=$_GET['id'];


  $bill="DELETE  FROM billing WHERE book='$u'";
  $book="DELETE  FROM booking WHERE Book_id='$u'";

  $result2=mysqli_query($con,$bill);
  $result1=mysqli_query($con,$book);

  if (!$result2){
    die( " error deleting");
  }else{
    echo " Record deleted";

  }
      mysqli_close($con);



 ?>
