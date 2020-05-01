<?php
  session_start();
  $dbhost = getenv("MYSQL_SERVICE_HOST");
  $dbport = getenv("MYSQL_SERVICE_PORT");
  $dbuser = getenv("DATABASE_USER");
  $dbpwd = getenv("DATABASE_PASSWORD");
  $dbname = getenv("DATABASE_NAME");
  $db = new mysqli($dbhost, $dbuser, $dbpwd, $dbname) or die("Cant Connect to database");
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
