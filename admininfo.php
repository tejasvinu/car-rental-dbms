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
                      <h1 class="text-dark text-center"> Customer Details</h1>
                      <tr>
                          <th scope="col">#</th>
                          <th scope="col"> Name</th>
                          <th scope="col">Phone</th>
                          <th scope="col">Date of birth</th>
                          <th scope="col">Address</th>
                          <th scope="col">Email</th>
                          <th scope="col">Sex</th>
                          <th scope="col">Delete</th>


                      </tr>
                  </thead>


                  <tbody>
    <?php
    $con= mysqli_connect('localhost','root','','project');


    mysqli_select_db($con,'project');



$sql = "SELECT * FROM `customer`";

$result = mysqli_query($con ,$sql);

$count=0;

while($row = mysqli_fetch_assoc($result)){

$name=$row['Name'];
$phone=$row['Phone_id'];
$birth=$row['Dateofbirth'];
$address=$row['Address'];
$email=$row['email'];
$sex=$row['Sex'];



$count++;

echo'<tr>
<th scope="row">'.$count.'</th>
<td>'.$name.'</td>
<td>'.$phone.'</td>
<td>'.$birth.'</td>
<td>'.$address.'</td>
<td>'.$email.'</td>
<td>'.$sex.'</td>
  <td><a class="btn btn-danger"  href="delete.php?name='.$name.'"><i class="fas fa-trash"></i></a></td>

</tr>';}

?>
</tbody>
      </table>





  </div>

</div>

  </body>
</html>
