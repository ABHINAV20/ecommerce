<?php

$con= mysqli_connect("localhost","root", "","ecommerce") or die(mysqli_error($con));
$select_query= "SELECT id, email, first_name FROM users";
$select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Life Style Store</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>
    
    <body>
        <div class="container">
            
            <?php while(mysqli_fetch_array($select_query_rsult)) {?>
            <div class="row">
                <div class="col-lg-12">
                    <h4>User</h4>
                </div>
                <div class="row">
                    <div class="col-xs-2">ID</div>
                    <div class="col-xs-10"><?php echo $row['id']?></div>
                </div>
                <div class="row">
                    <div class="col-xs-2">EMAIL</div>
                    <div class="col-xs-10"><?php echo $row['email']?></div>
                </div>
                <div class="row">
                    <div class="col-xs-2">First Name</div>
                    <div class="col-xs-10"><?php echo $row['first_name']?></div>
                </div>
            </div>
        </div>
    </body>
        </html>
        
        