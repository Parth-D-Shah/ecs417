<!DOCTYPE = html>
<html>
<head lang="en">
  <meta charset="utf-8">
  <title>Parth Shah</title>
  <link rel="stylesheet" href="reset.css" type="text/css"/>
  <link rel="stylesheet" href="experience.css">
</head>
<body>
  <div class="topnav">
    <h1>Parth Shah</h1>
    <a href="blog.php">Blog</a>
    <a href="Portfolio.html">Portfolio/CV</a>
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
      <a href="Skills.php">Skills and Achievements</a>
      <a href="https://www.linkedin.com/in/parth-shah-2025/">LinkedIn</a>
    </div>
  </aside>
  <article>
    <section>
      <hgroup>
        <h1 class="h1title">Work Experience</h1>
        <h2>RBS(Royal Bank of Scotland)</h2>
        <h3>Duration: 1 Week</h3>
      </hgroup>
      <br>
      <p>I was in a 1 week placement at RBS in CRM under Commercial and Private Banking. I was working with the manager of a team and working with several other teams.<br>
      <br>
      Some of the key things i learnt: Public Speeking, Office Etiqutte, Waterfall Model, Agile Development, Pestel Five Forces and Project Management.</p>
    </section>
    <br>
    <section>
      <hgroup>
        <h2>JP-Morgan</h2>
        <h3>Duration: 2 Weeks</h3>
      </hgroup>
      <br>
      <p>I was in a 2 week placement at JP-Morgan in the Investment Banking Department. I was working with a back end developer that was taking care of the AI side of the<br>
      <br>
      department. I also spent some time shadowing the network and hardware manager. The AI team worked in a 100% Agile environment.<br>
      <br>
      Some of the key things i learnt: Basics of C++ programming language, AI Accelarated Hardware, Hardware Diagnostics and Netcode.</p>
    </section>
    <br>
    <section>
      <hgroup>
        <h2>Jade-Pharmacy</h2>
        <h3>Duration: 1.5 Weeks</h3>
      </hgroup>
      <br>
      <p>I was in a 1.5 week placement at Jade-Pharmacy working in sales. During my teens i took this opportunity to learn important aspects of the working environment.<br>
      <br>
      Some of the key things i learnt: Time-Mangement and Critcial Thinking.</p>
    </section>
  </article>
  <article>
    <hgroup>
      <h1 class="h1title">Experience</h1>
      <h2>Neasden Temple</h2>
      <h3>Duration: 5 Years</h3>
      <br>
    </hgroup>
    <section>
      <p>Volunteering in the AV(Audio Visual) department like setting up digital equipment before a gathering takes place. Using python and CSV files to create a database.</p>
    </section>
  </article>
  <hr>
  <footer>
    <p>© 2020 Parth Shah | <a href="https://www.qmul.ac.uk/">QMUL</a></p>
  </footer>
</body>
</html>
