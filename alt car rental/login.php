
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> car rental</title>
  </head>
  <body>
      <h2> Register </h2>
      <form action="session.php" method="post">

        <div>
          <input type="text" name="uname" placeholder="Enter Username" required>
        </div>
        <div>
          <input type="text" name="password" placeholder="Enter password" required>
        </div>
        <div>
          <input type="text" name="address" placeholder="Enter address" required>
        </div>
        <div>
          <input type="text" name="Sex" placeholder="Enter Sex" required>
        </div>
        <div>
          <input type="email" name="email" placeholder="Email" required>
        </div>
        <div>
          <input type="number" name="phoneno" placeholder="Enter phoneno" required>
        </div>
        <div>
          <input type="date" name="Dateofbirth" placeholder="Enter Date of birth " required>
        <div>

        <button type="submit" >submit </button>

      </form>

      <div>
        <h1>already a user <a href ="alredyregistered.php">Login here</a><h1>
      </div>

      <div>
        <h2>admin  login <a href="admin.php">Admin Login </a></h2>
      </div>



  </body>
</html>
