<!DOCTYPE html>
<html lang="en">
    
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K-BOOKS - HOME</title>
    <?php include __DIR__ . "/model/book.php";?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
</head>

<body class="bg-light m-5">

    <?php require_once('inc/header.php') ?>




    <!--hero-->
    <div class="mb-5" style="
    background-image: url('./static/images/banner/hero-banner.jpg');
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
                    <img src="./static/images/selfHelpBooks/a-self-help.jpg" class="w-90 d-block" padding="2em">
                </div>

                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3 m-4 pb-2 shadow p-3 mb-5 bg-body rounded">
                    <img src="./static/images/selfHelpBooks/b-self-help.jpg" class="w-90 d-block" padding="2em">
                </div>

                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3 m-4 pb-2 shadow p-3 mb-5 bg-body rounded">
                    <img src="./static/images/selfHelpBooks/g-self-help.jpg" class="w-90 d-block" padding="2em">
                </div>

                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3 m-4 pb-2 shadow p-3 mb-5 bg-body rounded">
                    <img src="./static/images/selfHelpBooks/c-self-help.jpg" class="w-90 d-block" padding="2em">
                </div>

            </div>
        </div>

        <div class="swiper swiper-container w-100% d-block shadow p-3 mb-5 bg-body rounded">
            <h2 class="text-center fw-bold">Top 10 Bestsellers</h2>
            <div class="swiper-wrapper">
                <div class="swiper-slide shadow p-3 mb-5 bg-body rounded">
                    <img src="./static/images/carousel/1.jpg" class="w-70% d-block">
                </div>
                <div class="swiper-slide shadow p-3 mb-5 bg-body rounded">
                    <img src="./static/images/carousel/2.jpg" class="w-70% d-block">
                </div>
                <div class="swiper-slide shadow p-3 mb-5 bg-body rounded">
                    <img src="./static/images/carousel/3.jpg" class="w-70% d-block">
                </div>
                <div class="swiper-slide shadow p-3 mb-5 bg-body rounded">
                    <img src="./static/images/carousel/4.jpg" class="w-70% d-block">
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
                    <img src="./static/images/fiction/2.jpg" class="">
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
                    <img src="./static/images/fiction/1.jpg" class="card-img-top">
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
                    <img src="./static/images/selfHelpBooks/i-self-help.jpg" class="card-img-top">
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
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Click On shop page to shop >>></a>
            </div>
        </div>
    </div>




    <!-- Reviews -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold"> Reviews </h2>

    <div class="container mt-5">
        <div class="swiper swiper-Reviews">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white p-4 shadow">
                    <div class="profile d-flex-row align-items-center mg-3">
                        <img src="./static/images/features/user.png" width="200px">
                        <h6 class="m-0 ms-2">Illumination Nthikeng Mohlele Pan Macmillan SA,</h6>
                        <p>
                            February 2019 Online Price: R277       The best thing about this book is that the author pays homage to both contemporary and old school musicians, particularly in the jazz genre in a manner that immortalises their contribution to the art fraternity.
                        </p>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4 shadow">
                    <div class="profile d-flex-row align-items-center mg-3">
                        <img src="./static/images/features/user.png" width="200px">
                        <h6 class="m-0 ms-2">Thirteen Cents Kr</h6>
                        <p>
                          
                            Sello Duiker Kwela Books, July 2013 Online Price: R236       In the novel Thirteen Cents Duiker paints a vivid and heart wrenching picture of how, in post-apartheid South Africa, overt and covert marginalization still prevail. Racism, tribalism, exploitation, classism, corruption, crime, violence, violation, starvation, and displacemen
                        </p>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4 shadow">
                    <div class="profile d-flex-row align-items-center mg-3">
                        <img src="./static/images/features/user.png" width="200px">
                        <h6 class="m-0 ms-2">Mongane Wally Serote Jacana Media</h6>
                        <p>
                        Rumours. April 2013 Online Price: R226       Mongane Wally Serote’s Rumours explores a man’s journey to dig deep into himself in an effort to discover what it is that he already knows, but had somehow forgotten along the way. Serote uses South Africa’s post-apartheid
                        </p>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- Reach Us -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold"> REACH US </h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" height="450" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3310.638062445999!2d18.44652591521169!3d-33.92471368064084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dcc5d99a8bcd1cb%3A0x76681ae213743dc1!2sBeach%20Rd%2C%20Woodstock%2C%20Cape%20Town%2C%207915!5e0!3m2!1sen!2sza!4v1668598437731!5m2!1sen!2sza" loading="lazy"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Call us</h5>
                    <a href="tel: +27678546921" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>+27678546921
                    </a>
                    <br>
                    <a href="tel: +27678546921" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>+27678546921
                    </a>
                </div>
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow us</h5>
                    <a href="" class="d-inline-block mb-3">
                        <span class="badge bg-loght text-dark fs-6 p-2">
                            <i class="bi bi-twitter"></i> Twitter
                        </span>
                    </a>
                    <br>
                    <a href="" class="d-inline-block mb-3">
                        <span class="badge bg-loght text-dark fs-6 p-2">
                            <i class="bi bi-facebook"></i> Facebook
                        </span>
                    </a>
                    <br>
                    <a href="" class="d-inline-block">
                        <span class="badge bg-loght text-dark fs-6 p-2">
                            <i class="bi bi-instagram"></i> Instagram
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>




    <?php require('inc/footer.php') ?>

    <h6 class="text-center bg-dark text-white p-3 mg-0">Sponsored by CodeSpace</h6>
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