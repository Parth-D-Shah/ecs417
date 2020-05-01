<?php
  session_start();
  $db = new mysqli('localhost','root','','webtech') or die("Cant Connect to database");
  $username = $_POST['username'];
  $password = $_POST['password'];
  $passwordconfirm = $_POST['passwordconfirm'];
  if($password != $passwordconfirm)
  {
    echo "<script>window.alert('Password and Password confirmation does not match');document.location='login.html'</script>";
    die();
  }
  $sql = "INSERT INTO user (username,password) VALUES ('$username','$password')";
  if ($db->query($sql) === TRUE)
  {
    header('Location: Homepage.php');
  }
  else
  {
    echo "Error: " . $sql . "<br>" . $db->error;
  }
  $_SESSION['logged_in'] = true;
  if(isset($_SESSION['logged_in']) && ($_SESSION['logged_in'] == true))
  {
    header('Location: Homepage.php');
  }
?>
