<!DOCTYPE = html>
<html>
<head lang="en">
  <meta charset="utf-8">
  <title>Parth Shah</title>
  <link rel="stylesheet" href="reset.css" type="text/css"/>
  <link rel="stylesheet" href="skills.css">
</head>
<body>
  <div class="topnav">
    <h1>Parth Shah</h1>
    <a href="blog.php">Blog</a>
    <a href="Portfolio.html">Portfolio/CV</a>
    <a href="Experience.php">Experience</a>
    <a href="Contact.php">Contact</a>
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
      <a href="https://www.linkedin.com/in/parth-shah-2025/">LinkedIn</a>
    </div>
  </aside>
  <article>
    <section>
      <h1 class="mainh1">Skills</h1>
      <br>
      <ul>
        <li>Communication</li><br>
        <li>Time Management</li><br>
        <li>Critical Thinking</li><br>
        <li>Teamwork</li><br>
        <li>Problem Solving</li><br>
        <li>Java</li><br>
        <li>Python</li><br>
        <li>HTML/CSS</li><br>
        <li>Javascript/PHP</li>
      </ul>
    </section>
    <br>
    <section>
      <h1 class="mainh1">Achievements</h1>
      <figure>
        <img src="Ceh.png">
      </figure>
      <br>
      <ul>
        <li>2018 Senior Code Club Winner</li><br>
        <li>2016 Junior Code Club Winner </li><br>
        <li>2013 Certified Ethical Hacker Certification by CEH</li><br>
        <li>2010 Winner of Stamp Club Competition</li>
      </ul>
    </section>
  </article>
  <footer>
    <hr>
    <p>© 2020 Parth Shah | <a class="footercl" href="https://www.qmul.ac.uk/">QMUL</a></p>
  </footer>
</<body>
</html>
