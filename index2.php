<?php

 session_start();
 require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
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
    <style>
    body {background-color:#000000;}
    </style>

</head>
<body>
    <div class="container mt-4">

    <?php include('message.php'); ?>
       <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Booking Details
                     <a href="booking.php" class="btn btn-primary float-end">Add customers</a>
                    </h4>
                   </div>
                   <div class="card-body">
                   <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer name</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>People</th>
                            <th>Phone</th>
                            <th>Food</th>
                            <th>Actions</th>

                         </tr>
                       </thead>
                       <tbody>
                         <?php
                         $query ="SELECT * FROM peggys";
                         $query_run =mysqli_query($con,$query);

                         if(mysqli_num_rows($query_run)>0)
                           {   
                                foreach($query_run as $peggy)
                                {
                                    //echo $peggy['name'];
                                    ?>
                                      <tr>
                                       <td><?= $peggy['id']; ?></td>
                                       <td><?= $peggy['name']; ?></td>
                                       <td><?= $peggy['email']; ?></td>
                                       <td><?= $peggy['date']; ?></td>
                                       <td><?= $peggy['people']; ?></td>
                                       <td><?= $peggy['phone']; ?></td>
                                       <td><?= $peggy['food']; ?></td>
                                       <td>
                                          <a href="customer-view.php?id=<?=$peggy['id'] ;?> " class="btn btn-info btn-sm">View</a>
                                          <a href="customer-edit.php?id=<?=$peggy ['id']; ?> " class="btn btn-success btn-sm">Edit</a>
                                          <form action="code.php" method="POST" class="d-inline">
                                          <button type="submit" name="delete_customer" value="<?=$peggy['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                         </form>
                                       </td>
                                     </tr>
                                    <?php
                                }


                           }
                             else
                             {
                                echo "<h5> No Record Found</h5>";
                             }
                            ?>


                       
                     </tbody>
                   </table>
                   </div>
                </div>
            </div>
        </div>
    </div>

              
          







</body>
</html>