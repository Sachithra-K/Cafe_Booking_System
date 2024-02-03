<?php
session_start();
require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <title>Customer Edit</title>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Peggy's Cafe</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                
                        <a href="menu.php" class="nav-item nav-link">Menu</a>
                        <div class="nav-item dropdown">
                    
                            <div class="dropdown-menu m-0">
                                <a href="booking.php" class="dropdown-item active">Booking</a>
                            
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="booking.php" class="btn btn-primary py-2 px-4">Book A Table</a>
                </div>
            </nav>

          


        <!-- Reservation Start -->
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
                      <?php include('message.php');
                      ?>
                <div class="col-md-12 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                        <h1 class="text-white mb-4">Customer Edit</h1>
                        <h4 >Customer Edit
                          <a href="index2.php" class="btn btn-danger float-end">BACK</a>
                         </h4>
                        <div class="card-body">

                           <?php
                           if(isset($_GET['id']))
                            {    $customer_id= mysqli_real_escape_string($con,$_GET['id']);
                                  $query ="SELECT *FROM peggys WHERE id='$customer_id' ";
                                  $query_run=mysqli_query($con,$query);

                                  if(mysqli_num_rows($query_run)>0)
                                 
                                  {  
                                     $customer= mysqli_fetch_array($query_run);
                                     
                                     
                                     ?>
                                    

                            <form action="code.php" method="POST">
                               <input type="hidden"  name="customer_id" value="<?= $customer['id']; ?>"  class="form-control"></input> 


    
                                <div class="mb-3">
                                    <label>Name</label>
                                    <input type="text"  name="name"  value="<?=$customer['name'];?>" class="form-control"></input>
                                </div>
                                <div class="mb-3 ">
                                    <label>Email</label>
                                    <input type="email" name="email" value="<?=$customer['email'];?>"   class="form-control"></input>
                                </div>
                                <div class="mb-3 ">
                                    <label>Date</label>
                                    <input type="text" name="date" value="<?=$customer['date'];?>" class="form-control" ></input>
                                </div>
                                <div class="mb-3 ">
                                    <label>People</label>
                                    <input type="text" name="people" value="<?=$customer['people'];?>"   class="form-control"></input>
                                </div>
                                <div class="mb-3 ">
                                    <label>Phone</label>
                                    <input type="text" name="phone" value="<?=$customer['phone'];?>" class="form-control"></input>
                                </div>
                                <div class="mb-3 ">
                                    <label>Food</label>
                                    <input type="text" name="food"  value="<?=$customer['food'];?>"  class="form-control"></input>
                                </div>
                                <div class="mb-2">
                                    <button type="submit" name="update_customer" class="btn float-end class=" style="color:white; background-color:#E4950f; width: 360px;; border: radius 4px;">Update</button>
                                </div>
    
                            </form>
                            <?php
                                  
                                }
                                else
                                {
                                    echo "<h4>No such Id found</h4>";
                                }



                                }
                                ?>                                     

                        </div>
                   </div>

       
            </div>
        </div>
        <!-- Reservation Start -->
        

       

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>