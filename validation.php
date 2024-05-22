<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="E:\xampp\htdocs\Libraryms\css\bootstrap.min.css" rel="stylesheet">
    <link href="E:\xampp\htdocs\Libraryms\font-awesome-4.7.0" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/logins/login-6/assets/css/login-6.css">
</head>
<body>
    <?php
    session_start();
$email="user@1234";
$password="1234";
if($email==$_POST['email'] && $password==$_POST['password'])
{
    $_SESSION['login']=true;
   header('location:home.php');
}
else
{
    header('location:admin_login.php?msg=wrong');
    ?>


<?php
 }
?>
  <script src="E:\xampp\htdocs\Libraryms\js\bootstrap.min.js"></script>
</body>
</html>