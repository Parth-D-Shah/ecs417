<!DOCTYPE = html>
<html>
<head lang="en">
  <meta charset="utf-8">
  <title>Parth Shah</title>
  <link rel="stylesheet" href="reset.css" type="text/css"/>
  <link rel="stylesheet" href="blog.css">
</head>
<body>
  <div class="topnav">
    <h1>Parth Shah</h1>
    <a href="Portfolio.html">Portfolio/CV</a>
    <a href="Experience.php">Experience</a>
    <a href="Contact.php">Contact</a>
    <a href="Homepage.php">Homepage</a>
  </div>
  <div class="posts">
    <h2>Blog<h2>
      <?php
        session_start();
        $db = new mysqli('localhost','root','','webtech') or die("Cant Connect to database");
        $query = mysqli_query($db,"SELECT * FROM post ORDER BY ID DESC") or die("Database error");
        if(mysqli_num_rows($query) > 0)
        {
          while($currentrow = mysqli_fetch_assoc($query))
          {
            $id = $currentrow['ID'];
            $title = $currentrow['post_title'];
            $text = $currentrow['post_text'];
            $date = $currentrow['post_date'];
            if($_SESSION['super'] == true)
            {
              echo "<br><h3>Post ID: $id <br><br> Title: $title<h3><br><p>$text</p><br><p>Time: $date</p><br><a href='delete.html'><input type='submit' onclick='window.location.href ='delete.html';' value='Delete'></form><br><hr>";
            }
            else
            {
              echo "<br><h3>Title: $title<h3><br><p>$text</p><br><p>Time: $date</p><br><hr>";
            }
          }
          if(isset($_SESSION['logged_in']))
          {
            if($_SESSION['super'] == true)
            {
              echo'<br><a href="addpost.html">Add Post<a>';
            }
          }
        }
        else
        {
          echo'<br>';
          echo'<h2>No Posts have been made yet check back another time</h2>';
          if(isset($_SESSION['logged_in']))
          {
            if($_SESSION['super'] == true)
            {
              echo'<br><a href="addpost.html">Add Post<a>';
            }
          }
        }
      ?>
  </div>
</body>
</html>
