<?php
  require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home | FusionStore99</title>
        <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">

          <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap Core CSS -->
          <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
          <link href="./css/style.css" rel="stylesheet">
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
            <div id = "banner_image">
                <div class="container">
                    <center>
                        <div id="banner_content">
                            <h1>Wowtastic Shoes for Wowtastic peoples</h1>
                            <h4><p>Flat &nbsp;&#8377;1,500&nbsp;&nbsp;OFF&nbsp;&nbsp;on all products.</p></h4>
                            <br>
                            <br>
                            <a  href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <br>
            <br>
            <!--Main banner image end-->

            <!--Item categories listing-->
            <div class="container text-center">
                <div id="item_list">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color:#5bc9f5;" >
                            <h3 style="color:white">Choose From wide range</h3>
                        </div>

                    <div class="panel-body">
                        <div class="col-sm-3">
                            <a href="products.php#boot">
                               <div class="thumbnail">
                                    <img  src="./img/b1.jpg" alt="boots" >
                                        <div class="caption">
                                            <h3>Boots</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="products.php#formals">
                               <div class="thumbnail">
                                    <img src="./img/brf.jpg" alt="formal/lofers" >
                                        <div class="caption">
                                            <h3>Formals/Lofers</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="products.php#sneakers">
                               <div class="thumbnail">
                                    <img src="./img/sn.jpg" alt="Sneakers" >
                                        <div class="caption">
                                            <h3>Sneakers</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="products.php#sports">
                               <div class="thumbnail">
                                    <img src="./img/spo1.jpg" alt="sports" >
                                        <div class="caption">
                                            <h3>Sports</h3>
                                        </div>
                                </div>
                            </a>
                        </div>
                    </div>
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
