<?php

require("includes/common.php");


if (isset($_SESSION['email'])) {
  header('location: products.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welcome | TrendMart</title>
    <link rel="icon" href="img/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link href="bootstrap/style.css" rel="stylesheet">
</head>

<body style="padding-top: 50px;">

    <?php
        include 'includes/header.php';
    ?>


    <div id="content">
        <div id="banner_image">
            <div class="container">
                <center>
                    <div id="banner_content">
                        <h1 style="color:white">BIG SAVING DAYS</h1>
                        <h2 style="color:red">SALE IS LIVE!</h2>
                        <p>Land Here for the Biggest Offers</p>
                        <br />
                        <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                    </div>
                </center>
            </div>
        </div>

        <div class="container">

            <div class="items">
                <a href="kids.php#Kids">
                    <img src="img/kids_1.jpg" alt="Kids" class="thumbnails">
                    <div class="caption">
                        <h3>Kids</h3>
                        <p>Choose among the best available in the world.</p>
                    </div>
                </a>
            </div>

            <div class="items">
                <a href="women.php#Female">
                    <img src="img/women_1.jpg" alt="Female" class="thumbnails">
                    <div class="caption">
                        <h3>For Her</h3>
                        <p>Shandaar Price Drop</p>
                    </div>
                </a>
            </div>

            <div class="items">
                <a href="men.php#Male">
                    <img src="img/men_1.jpg" alt="Male" class="thumbnails">
                    <div class="caption">
                        <h3>For Him</h3>
                        <p>Our exquisite collection of shirts, Pants etc</p>
                    </div>
                </a>
            </div>
        </div>
    </div>


    <?php
        include 'includes/footer.php';
        ?>

</body>

</html>
