<!DOCTYPE = html>
<html>
<head lang="en">
  <meta charset="utf-8">
  <title>Parth Shah</title>
  <link rel="stylesheet" href="reset.css" type="text/css"/>
  <link rel="stylesheet" href="homepage.css">
</head>
<body>
<nav>
  <div class="topnav">
    <h1>Parth Shah</h1>
    <a href="blog.php">Blog</a>
    <a href="Portfolio.html">Portfolio/CV</a>
    <a href="Experience.php">Experience</a>
    <a href="Contact.php">Contact</a>
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
</nav>
  <article>
    <section>
      <header>
        <h1>About Myself</h1>
      </header>
      <p>My name is Parth Shah and I am a first year student within the School of Engineering and Computer Science(eecs) at Queen Mary University Of London.<br>
      <br>I was born and brought up in Edgware (in the borough of Harrow - part North West London). My favourite subjects to study about are: Computer Science,<br>
      <br>Biology, Chemistry, Maths and Astronomy. My hobbies include playing video games creating mods for video games and anything tech related. I also<br>
      <br>know how to program in java, C++, python, PHP and MYSQL.</p>
    </section>
    <figure>
      <img src="parth.jpg">
      <figcaption>Parth Shah</figcaption>
    </figure>
    <section>
      <header>
        <h1>Education<h1>
      </header>
      <ul>
        <li>2004-2012- Stag Lane Junior School</li><br>
        <li>2012-2019- Canons High School</li><br>
        <li>2019-2022- Queen Mary University Of London</li>
      </ul>
    </section>
    <section>
      <header>
        <h1>Qualifications<h1>
      </header>
        <ul>
          <li>GCSE Computer Science</li>
          <li>GCSE Mathematics</li>
          <li>GCSE English Language</li>
          <li>GCSE English Literature</li>
          <li>GCSE Core, Additional and Futher Additional Science</li>
          <li>GCSE Geography</li>
          <li>GCSE RS</li>
          <li>GCSE Engineering</li>
          <li>GCSE ICT</li><br>
          <li>A LEVEL Computer Science</li>
          <li>A LEVEL Biology</li>
          <li>A LEVEL Chemistry</li><br>
          <li>BSC Computer Science(current)</li>
        <ul>
    </section>
  </article>
  <hr>
  <footer>
    <p>© 2020 Parth Shah | <a class="footercl" href="https://www.qmul.ac.uk/">QMUL</a></p>
  </footer>
</body>
</html>
