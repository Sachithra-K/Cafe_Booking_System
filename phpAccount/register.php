<?php
include('partials/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account in php</title>

    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="register_container">
        <div class="overlay">
       
        </div>
        <div class="titleDiv" >
           <h1 class="title">Register</h1>
           <span class="subTitle">Thanks for choosing!</span>
        </div>  
       
       <form action="" method="POST">
        <div class="row grid">
           <!--userName-->
           <div class="row">
               <label for="username">User Name</label>
               <input type="text" id="username" name="userName"
               placeholder="Enter your Name" required>
           </div>
        <!--email-->
           <div class="row">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email"
            placeholder="Enter your Email" required>
        </div>


            <!--phone number-->
           <div class="row">
               <label for="phone">Phone number</label>
               <input type="text" id="phone" name="phone"
               placeholder="Enter your Phone number" required>
           </div>
            <!--password-->
            <div class="row">
                <label for="password">Password</label>
                <input type="password" id="password" name="password"
                placeholder="Enter your Password" required>
            </div><br>


            <!--submit button-->
           <div class="row">
           
               <input type="submit" id="submitBtn" name="submit"
               value="Login" required>
               <span class="registerLink">Have an account already? <a href="index3.php" >Login</a> </span>
       
           </div>
        </div>
       </div>
       </form>
       </div>
       <?php
         include('partials/footer.php');
        ?>

        <?php
        if(isset($_POST['submit'])){
           
            $userName =$_POST['userName'];
            $email =$_POST['email'];
            $password =$_POST['password'];
            $phone =$_POST['phone'];

            $sql ="INSERT INTO admin SET
                   usernames='$userName',
                   email ='$email',
                   passwords ='$password',
                   phone ='$phone'


           ";

           $res=mysqli_query($conn,$sql);
           if($res ==true){
                 $_SESSION['accountCreated']='<span class="success"> Account '.$userName.' created! </span> ';
                 header('location:'.SITEURL.'index3.php');
                 exit();

           }

           else{
            $_SESSION['unSuccessful']='<span class="fail"> Account '.$userName.' failed! </span> ';
            header('location:'.SITEURL.'register.php');
            exit();






           }








        }


        ?>