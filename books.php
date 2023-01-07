<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> - BOOKS</title> 
    <style>
        .pop:hover{
            border-top-color: var(--teal) !important;
            transform: scale(1.03);
            transition: all 0.4s;
        }
    </style>
</head>

<body class="bg-light">

    <?php require_once('inc/header.php') ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold text-center">BOOKS</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Browse through our book gallery for your little ones
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 px-5">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex-row align-items-center mb-2">
                        <img src="./static/images/childrens/a-childrens.jpeg" width="200px">
                        <h6 class="mb-4">Planting For Honeybees</h6>
                        <h5 class="mb-0 ms-0"></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-5">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex-row align-items-center mb-2">
                        <img src="static/images/childrens/g-childrens.jpg" width="200px">
                        <h6 class="mb-4">The New Farm</h6>
                        <h5 class="mb-0 ms-0"></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-5">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex-row align-items-center mb-2">
                        <img src="static/images/childrens/c-childrens.jpg" width="200px">
                        <h6 class="mb-4">A Very Fine House</h6>
                        <h5 class="mb-0 ms-0"></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-5">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex-row align-items-center mb-2">
                        <img src="static/images/childrens/d-childrens.jpg" width="200px">
                        <h6 class="mb-4">The Tree Keepers</h6>
                        <h5 class="mb-0 ms-0"></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-5">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex-row align-items-center mb-2">
                        <img src="static/images/childrens/e-childrens.jpg" width="200px">
                        <h6 class="mb-4">NESTiG</h6>
                        <h5 class="mb-0 ms-0"></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-5">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex-column align-items-center mb-2">
                        <img src="static/images/childrens/f-childrens.jpg" width="200px">
                        <h6 class="mb-4">A World Full Of Animal Stories</h6>
                        <h5 class="mb-0 ms-0"></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc/footer.php') ?>
</body>

</html>