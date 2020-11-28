<?php
require("includes/common.php");

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: home.php');
}

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
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->

        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image" style="background: url(new_img/bg_kk.jpg) no-repeat center center;">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>We bring beauty to your home.</h1>
                            <p>Flat 40% OFF on premium brands </p>
                            <br/>
                            <a  href="home.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <!--Main banner image end-->

            <!--Item categories listing-->
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="home.php#cameras" >
                            <div class="thumbnail">
                                <img src="new_img/1.jpg" alt="">
                                <div class="caption">
                                    <h3>Furnitures</h3>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="home.php#watches" >
                            <div class="thumbnail">
                                <img src="new_img/2.jpg" alt="">
                                <div class="caption">
                                    <h3>Lamps</h3>
                                    <p>Original Lamps with best beauty.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="home.php#shirts" >
                            <div class="thumbnail">
                                <img src="new_img/3.jpg" alt="">
                                <div class="caption">
                                    <h3>Antiques</h3>
                                    <p>Our antique collection of home decors.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <!--Item categories listing end-->
        </div>
        
        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
   
    </body> 
</html>