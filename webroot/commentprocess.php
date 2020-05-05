<?php
  session_start();
  $dbhost = getenv("MYSQL_SERVICE_HOST");
  $dbport = getenv("MYSQL_SERVICE_PORT");
  $dbuser = getenv("DATABASE_USER");
  $dbpwd = getenv("DATABASE_PASSWORD");
  $dbname = getenv("DATABASE_NAME");
  $db = new mysqli($dbhost, $dbuser, $dbpwd, $dbname) or die("Cant Connect to database");
  $commentid = $_POST['id'];
  $commenttext = $_POST['text'];
  $user = $_SESSION['name']
  $sql = "INSERT INTO comment (comment_text,post_ID,user_ID) VALUES ('$commenttext','$commentid','$user')";
  if ($db->query($sql) === TRUE)
  {
    header('Location: blog.php');
  }
?>
