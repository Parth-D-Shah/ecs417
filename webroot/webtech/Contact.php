<html>
<head lang="en">
  <meta charset="utf-8">
  <title>Parth Shah</title>
  <link rel="stylesheet" href="reset.css" type="text/css"/>
  <link rel="stylesheet" href="contact.css">
</head>
<body>
  <div class="topnav">
    <h1>Parth Shah</h1>
    <a href="blog.php">Blog</a>
    <a href="Portfolio.html">Portfolio/CV</a>
    <a href="Experience.php">Experience</a>
    <a href="Homepage.php">Homepage</a>
  </div>
  <aside>
    <div class="sidebar">
      <?php
        session_start();
        if(isset($_SESSION['logged_in']))
        {
          if($_SESSION['logged_in'] == true)
          {
            echo'<a href="logout.php">Log Out</a>';
          }
          else if($_SESSION['logged_in'] == false)
          {
            echo'<a href="login.html">Log In/Register</a>';
          }
        }
        else
        {
          echo'<a href="login.html">Log In/Register</a>';
        }
      ?>
      <a href="Skills.php">Skills and Achievements</a>
      <a href="https://www.linkedin.com/in/parth-shah-2025/">LinkedIn</a>
    </div>
  </aside>
  <article>
    <section>
      <h1 class="h1style">Contact Details</h1>
      <br>
      <p>Phone: 07722958991</p>
      <br>
      <p>Email: ParthShah2065@outlook.com</p>
    </section>
    <br>
    <section>
      <h1 class="h1style">Social Media Contact Details</h1>
      <br>
      <a class="cvbutton" href="https://www.instagram.com/_p2rth/">Instagram</a><br>
      <br>
      <a class="cvbutton" href="https://www.facebook.com/profile.php?id=100008014920475">Facebook</a><br>
      <br>
      <a class="cvbutton1" href="https://twitter.com/SoulSlayer101">Twitter</a><br>
      <br>
      <p>Snacpchat Username: partttty<p>
    </section>
  </article>
  <footer class="footercl">
    <hr>
    <p>© 2020 Parth Shah | <a class="footercl" href="https://www.qmul.ac.uk/">QMUL</a></p>
  <footer>
</body>
</html>
