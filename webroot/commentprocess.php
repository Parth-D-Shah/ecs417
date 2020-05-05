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
  $query = mysqli_query($db,"INSERT INTO comment (comment_text,post_ID,user_ID) VALUES ('$commenttext','$commentid','$user') or die("Database error");
  if ($db->query($query) === TRUE)
  {
    header('Location: blog.php');
  }
?>
