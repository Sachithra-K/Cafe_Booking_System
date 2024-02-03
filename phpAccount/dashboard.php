<?php
include('partials/header.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="main.css">
</head>
<body>
  <div class="dashboard">
    <span>
      <?php
       if(isset($_SESSION['loginMessage'])){
           echo $_SESSION['loginMessage'];
           unset($_SESSION['loginMessage']);



       }
     ?>


    </span>   
     <h1>Dashboard</h1>
     <div class="logOutBtn">
     <a href="logOut.html">   Log Out </a>

     </div>

    </span>
  </div>

<?php
include('partials/footer.php');
?>