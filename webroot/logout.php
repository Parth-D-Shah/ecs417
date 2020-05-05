<?php
  session_start();
  $_SESSION['logged_in'] = false;
  $_SESSION['super'] = false;
  $_SESSION['name'] = null;
  echo "<script>window.alert('You have succesfully logged out');document.location='Homepage.php'</script>";
?>
