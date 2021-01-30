<!DOCTYPE html>
<html lang="" dir="ltr">
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">



      <!-- icons -->
      <script src="https://kit.fontawesome.com/454963619a.js" crossorigin="anonymous"></script>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class="container-fluid mt-4 pt-4">

          <div class="container-fluid">



              <table class="table table-responsive-sm  table-responsive-md ">
                  <thead class="thead">
                      <h1 class="text-dark text-center"> Boooking &Billing Details</h1>
                      <tr>
                          <th scope="col">#</th>
                          <th scope="col"> Name</th>
                          <th scope="col"> Car</th>
                          <th scope="col"> Company</th>
                          <th scope="col">Booking Date</th>
                          <th scope="col">No of days</th>
                          <th scope="col">Licence Id</th>
                          <th scope="col">Cost</th>
                          <th scope="col">final amount</th>
                          <th scope="col">Delete</th>


                      </tr>
                  </thead>


                  <tbody>
    <?php
    $con= mysqli_connect('localhost','root','','project');


    mysqli_select_db($con,'project');



$sql = "SELECT * FROM `booking`";

$result = mysqli_query($con ,$sql);

$count=0;



while($row = mysqli_fetch_assoc($result)){

$name=$row['uname'];
$booking=$row['BookingDate'];
$days=$row['no_of_days'];
$licence=$row['Licence_id'];
$id=$row['Book_id'];
$unique=$row['Uniqueid'];

$count++;
$sql1 = "SELECT * FROM `billing` WHERE book='$id'";
$result1 = mysqli_query($con ,$sql1);
$row1 = mysqli_fetch_assoc($result1);
$cost=$row1['cost'];
$amount=$row1['final_Amount'];

$sql2 = "SELECT * FROM `car` WHERE Unique_id='$unique'";
$result2 = mysqli_query($con ,$sql2);
$row2 = mysqli_fetch_assoc($result2);

echo'<tr>
<th scope="row">'.$count.'</th>
<td>'.$name.'</td>
<td>'.$row2['Company'].'</td>
<td>'.$row2['Brand'].'</td>
<td>'.$booking.'</td>
<td>'.$days.'</td>
<td>'.$licence.'</td>
<td>'.$cost.'</td>
<td>'.$amount.'</td>
  <td><a class="btn btn-danger"  href="bookingdelete.php?id='.$id.'"><i class="fas fa-trash"></i></a></td>

</tr>';}

?>
</tbody>
      </table>


  </div>

</div>

  </body>
</html>
