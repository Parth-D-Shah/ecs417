<?php
  session_start();
  $db = new mysqli('localhost','root','','webtech') or die("Cant Connect to database");
  $data = $_POST['data'];
  $sql = "DELETE FROM post WHERE id=$data";
  if ($db->query($sql) === TRUE)
  {
    header('Location: blog.php');
  }
  else
  {
    echo "Error: " . $sql . "<br>" . $db->error;
  }
?>
