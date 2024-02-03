<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_customer']))
{  $customer_id =mysqli_real_escape_string($con, $_POST['delete_customer']);
   

   $query= "DELETE FROM peggys WHERE id='$customer_id' ";
   $query_run =mysqli_query($con, $query);

   if($query_run)
   {   $_SESSION['message']= "Customer Deleted Successfully";
         header("Location: index2.php");
       exit(0);
    }

     else
     {
        $_SESSION['message']= "Customer Not deleted";
       header("Location: index2.php");
       exit(0);

   }



}


if(isset($_POST['update_customer']))
{   
    $customer_id =mysqli_real_escape_string($con, $_POST['customer_id']);
    $name =mysqli_real_escape_string($con,$_POST['name']);
    $email =mysqli_real_escape_string($con,$_POST['email']);
    $date =mysqli_real_escape_string($con,$_POST['date']);
    $people =mysqli_real_escape_string($con,$_POST['people']);
    $phone =mysqli_real_escape_string($con,$_POST['phone']);
    $food =mysqli_real_escape_string($con,$_POST['food']);

    $query ="UPDATE peggys SET name='$name', email='$email', date='$date', people='$people',phone='$phone', food='$food' 
    
              WHERE id='$customer_id' ";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {  
         $_SESSION['message']= "Booking updated successfully";
        header("Location: index2.php");
        exit(0);
    }

    else
    {
         $_SESSION['message']= "Booking Not updated";
        header("Location: index2.php");
        exit(0);

    }

   
}


if(isset($_POST['submit']))

{   $name =mysqli_real_escape_string($con,$_POST['name']);
    $email =mysqli_real_escape_string($con,$_POST['email']);
    $date =mysqli_real_escape_string($con,$_POST['date']);
    $people =mysqli_real_escape_string($con,$_POST['people']);
    $phone =mysqli_real_escape_string($con,$_POST['phone']);
    $food =mysqli_real_escape_string($con,$_POST['food']);

    $query= "INSERT INTO peggys (name,email,date,people,phone,food) VALUES
    
     ('$name','$email','$date','$people','$phone','$food')";
      
    $query_run=mysqli_query($con,$query);
    if($query_run)
    {    $_SESSION['message']="Booking successful,See you soon";
        header("Location: booking.php");
        exit(0);
    }
    else
    {   $_SESSION['message']="Booking not successful";
        header("Location: booking.php");
        exit(0);

    }

}
?>