<?php
include('partials/header.php')
?>
<?php
 if(isset($_SESSION['accountCreated'])){
     echo $_SESSION['accountCreated'];
     unset($_SESSION['accountCreated']);




 }

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
    <div class="form_container">
 <div class="overlay">

 </div>
 <div class="titleDiv" >
    <h1 class="title">Login</h1>
    <span class="subTitle">Welcome back!</span>
 </div>  

<?php
if(isset($_SESSION['noAdmin'])){
   echo $_SESSION['noAdmin'];
   unset($_SESSION['noAdmin']);


}
?>



<form action="" method="POST">
 <div class="row grid">
    <!--userName-->
    <div class="row">
        <label for="username">User Name</label>
        <input type="text" id="username" name="userName"
        placeholder="Enter User Name" required>
    </div>
     <!--password-->
    <div class="row">
        <label for="password">Password</label>
        <input type="password" id="password" name="password"
        placeholder="Enter User Password" required>
    </div><br>
     <!--submit button-->
    <div class="row">
    
        <input type="submit" id="submitBtn" name="submit"
          value="Login" required>
        <span class="registerLink">Don't have an account? <a href="register.php" >Register</a> </span>

    </div>
 </div>
</div>



</form>


<?php
include('partials/footer.php');
?>

<?php

if(isset($_POST['submit'])){
   // echo 'Yes Data submitted';

$userName =$_POST['userName'];
$passWord =$_POST['password'];


$sql ="SELECT * FROM admin WHERE usernames='$userName' AND passwords='$passWord' ";

$result =mysqli_query($conn, $sql);

$count =mysqli_num_rows($result);

$row =mysqli_fetch_assoc($result);

if($count ==1){
    $_SESSION['loginMessage'] ='<span class="success"> Welcome  '.$userName.'     </span>   ';
    header('location:' .SITEURL.'dashboard.php');
    exit();

}

else{
    $_SESSION['noAdmin'] ='<span class="fail"> '.$userName.'  is not registered!   </span>   ';
    header('location:' .SITEURL.'index3.php');
    exit();


}













}


?>