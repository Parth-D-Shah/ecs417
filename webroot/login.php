<?php
  session_start();
  $dbhost = getenv("MYSQL_SERVICE_HOST");
  $dbport = getenv("MYSQL_SERVICE_PORT");
  $dbuser = getenv("DATABASE_USER");
  $dbpwd = getenv("DATABASE_PASSWORD");
  $dbname = getenv("DATABASE_NAME");
  $db = new mysqli($dbhost, $dbuser, $dbpwd, $dbname) or die("Cant Connect to database");
  $_SESSION['super'] = false;
  $username = $_POST['username'];
  $password = $_POST['password'];
  $datacheck = mysqli_query($db,"SELECT * FROM user WHERE username = '$username' and password = '$password'");
  $numrows = mysqli_num_rows($datacheck);
  if($numrows == 0)
  {
    echo "<script>window.alert('Wrong Username or Password');document.location='login.html'</script>";
  }
  else
  {
    $_SESSION['logged_in'] = true;
  }
  if(isset($_SESSION['logged_in']) && ($_SESSION['logged_in'] == true))
  {
    $_SESSION['name'] = $username;
    if(($username == 'admin@parth.com')&&($password == root))
    {
      $_SESSION['super'] = true;
    }
    echo "<script>window.alert('You have succesfully logged in');document.location='Homepage.php'</script>";
  }
?>
