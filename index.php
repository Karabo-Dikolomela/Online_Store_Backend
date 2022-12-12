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

        <div class="swiper swiper-container w-100% d-block shadow p-3 mb-5 bg-body rounded">
            <h2 class="text-center fw-bold">Top 10 Bestsellers</h2>
            <div class="swiper-wrapper">
                <div class="swiper-slide shadow p-3 mb-5 bg-body rounded">
                    <img src="./images/carousel/1.jpg" class="w-70% d-block">
                </div>
                <div class="swiper-slide shadow p-3 mb-5 bg-body rounded">
                    <img src="./images/carousel/2.jpg" class="w-70% d-block">
                </div>
                <div class="swiper-slide shadow p-3 mb-5 bg-body rounded">
                    <img src="./images/carousel/3.jpg" class="w-70% d-block">
                </div>
                <div class="swiper-slide shadow p-3 mb-5 bg-body rounded">
                    <img src="./images/carousel/4.jpg" class="w-70% d-block">
                </div>
            </div>
        </div>
    </div>
    

     <!-- Featured Books -->
     <h2 class="mt-5 pt-4 mb-4 text-center fw-bold">FEATURED</h2>

     <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="./images/fiction/2.jpg" class="">
                    <div class="card-body">
                        <h5>YOUR SOUL IS A RIVER</h5>
                        <h6 class="mb-4">R200</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Details</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                <strong>Author: </strong>  Nikita Gil
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                <strong>Genre:</strong>Self-Help
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                <strong>pages:</strong> 602
                            </span>
                        </div>

                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge round-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sn text-white custom-bg shadow-none">Add to Cart</a>
                            <a href="#" class="btn btn-sn btn-outline-dark shadow-none">More details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="./images/fiction/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>CEREAL</h5>
                        <h6 class="mb-4">R200</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Details</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                <strong>Author:</strong> Vincent Van Duysen
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                <strong>Genre:</strong> Self-Help
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                <strong>pages:</strong> 900
                            </span>

                        </div>

                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge round-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sn text-white custom-bg shadow-none">Add to Cart</a>
                            <a href="#" class="btn btn-sn btn-outline-dark shadow-none">More details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/selfHelpBooks/i-self-help.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>FALLING TOWARD THE MOON</h5>
                        <h6 class="mb-4">R200</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Details</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                <strong>Author:</strong> Robert M.Drake
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                <strong>Genre:</strong> Self Help
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                <strong>pages:</strong> 850
                            </span>
                        </div>

                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge round-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sn text-white custom-bg shadow-none">Add to Cart</a>
                            <a href="#" class="btn btn-sn btn-outline-dark shadow-none">More details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Books >>></a>
            </div>
        </div>
    </div>

<?php require('inc/footer.php') ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteration: false,
            }
        });

        var swiper = new Swiper(".swiper-Reviews", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });
    </script>
</body>
</html>