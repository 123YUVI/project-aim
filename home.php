<?php


session_start();
if(!$_SESSION['login']){
header('Location:admin_login.php');
}






include ('header.php');
?>

<!-- Hero Section  -->
<section id="heros">
    <div class="heros container">
      <div>
        <h1>Hello, <span></span></h1>
        <h1>welcome to <span></span></h1>
        <h1>AIM <span></span></h1>
        <a href="contact.php" type="button" class="cta">Contact Us</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

<?php
include ('footer.php');
?>