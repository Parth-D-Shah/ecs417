<!DOCTYPE = html>
<html>
<head lang="en">
  <meta charset="utf-8">
  <title>Parth Shah</title>
  <link rel="stylesheet" href="reset.css" type="text/css"/>
  <link rel="stylesheet" href="comment.css">
</head>
<body>
  <div>
    <h1>Post</h1>
    <?php
      session_start();
      $dbhost = getenv("MYSQL_SERVICE_HOST");
      $dbport = getenv("MYSQL_SERVICE_PORT");
      $dbuser = getenv("DATABASE_USER");
      $dbpwd = getenv("DATABASE_PASSWORD");
      $dbname = getenv("DATABASE_NAME");
      $db = new mysqli($dbhost, $dbuser, $dbpwd, $dbname) or die("Cant Connect to database");
      $id = $_POST['id'];
      $query = mysqli_query($db,"SELECT * FROM post WHERE id = '$id'") or die("Database error");
      $row = mysqli_fetch_assoc($query);
      $title = $row['post_title'];
      $text = $row['post_text'];
      $date = $row['post_date'];
      if($_SESSION['super'] == true)
      {
        echo "<br><h3>Post ID: $id <br><br> Title: $title<h3><br><p>$text</p><br><p>Time: $date</p><br><form method='POST' action='commentprocess.php'><input type='hidden' name='id' value='$id'><label>Enter Comment</label><br><textarea name='text' rows='10' cols='50' required='true'></textarea><br><input type='submit'></form><br><hr>";
      }
      else
      {
        echo "<br><h3>Title: $title<h3><br><p>$text</p><br><p>Time: $date</p><br><hr>";
      }
    ?>
  </div>
</body>
</html>
