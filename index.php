<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K-BOOKS</title>
    <?php
    require('inc/links.php')
    ?>
</head>
<body class="bg-light m-5">
<?php require_once('inc/header.php') ?>

 <!--hero-->
 <div class="mb-5" style="
    background-image: url('./images/banner/hero-banner.jpg');
    height: 30vh;
  ">
        <h5 class="text-white text-center shadow-1-strong p-5 text-center">"To know that we know what we know, and to know that we do not know what we do not know, that is true knowledge."

            <br><br><strong>~Nicolaus Copernicus</strong>
        </h5>
    </div>

    <!-- Carousel -->
    <div class="container-fluid d-flex margin: auto;">

        <div class="container-fluid">
            <div>
                <h2 class="text-center fw-bold">NEW ADDITION</h2>
            </div>
            <div class="d-flex flex-wrap mt-5">

                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3 m-4 pb-2 shadow p-3 mb-5 bg-body rounded">
                    <img src="images/selfHelpBooks/a-self-help.jpg" class="w-90 d-block" padding="2em">
                </div>

                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3 m-4 pb-2 shadow p-3 mb-5 bg-body rounded">
                    <img src="images/selfHelpBooks/b-self-help.jpg" class="w-90 d-block" padding="2em">
                </div>

                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3 m-4 pb-2 shadow p-3 mb-5 bg-body rounded">
                    <img src="images/selfHelpBooks/g-self-help.jpg" class="w-90 d-block" padding="2em">
                </div>

                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3 m-4 pb-2 shadow p-3 mb-5 bg-body rounded">
                    <img src="images/selfHelpBooks/c-self-help.jpg" class="w-90 d-block" padding="2em">
                </div>

            </div>
        </div>
    </div>

<?php require('inc/footer.php') ?>
</body>
</html>