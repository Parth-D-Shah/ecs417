<?php
  session_start();
  $_SESSION['super'] = false;
  $db = new mysqli('localhost','root','','webtech') or die("Cant Connect to database");
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
    if(($username == admin)&&($password == root))
    {
      $_SESSION['super'] = true;
    }
    header("Location: Homepage.php");
  }
?>