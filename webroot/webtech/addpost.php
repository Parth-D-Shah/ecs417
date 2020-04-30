<?php
session_start();
$db = new mysqli('localhost','root','','webtech') or die("Cant Connect to database");
$title = $_POST['title'];
$text = $_POST['text'];
$date = date("l jS \of F Y h:i:s A");
$sql = "INSERT INTO post (post_title,post_text,post_date) VALUES ('$title','$text','$date')";
if ($db->query($sql) === TRUE)
{
  header('Location: blog.php');
}
else
{
  echo "Error: " . $sql . "<br>" . $db->error;
}
?>
