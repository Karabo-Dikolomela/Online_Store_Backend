<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K BOOKS - ABOUT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <style>
        .box {
            border-top-color: var(--teal) !important;
        }
    </style>
</head>

<body class="bg-light">

    <?php require_once('inc/header.php') ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold text-center">ABOUT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
        KBooks has long been devoted to delivering on four unique and particular strengths: <u>range</u>, <u>convenience</u>, <u>service</u> and <u>value</u>.
        </p>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-mb-4 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">Our Mission </h3>
                <p>
                In championing convenience, we do everything we can to encourage a stress free and rewarding shopping experience. Via careful use of eye-catching displays and intuitive layouts, and by locating bestsellers and sought-after titles near the entrance, we ensure that your visit to our store can be as quick and easy as you want it to be. And you’ll never have trouble spotting a bookseller if you have a question that you’d like answered quickly. We remain sensitive to the fact that lengthy shop visits can be disconcerting due to Covid-19, so we are conscientious about facilitating simple, safe book shopping.
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-1 order-1">
                <img src="static/images/about/about.png" class="w-100">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="bg-white rounded p-4 border-top border-4 text-center shadow box">
                    <img src="static/images/about/books.jpg" width="70px">
                    <h4 class="mt-3">50 000+ BOOKS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="bg-white rounded p-4 border-top border-4 text-center shadow box">
                    <img src="static/images/about/customer.png" width="185px">
                    <h4 class="mt-3">200+ CUSTOMERS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="bg-white rounded p-4 border-top border-4 text-center shadow box">
                    <img src="static/images/about/reviews.png" width="115px">
                    <h4 class="mt-3">150+ Reviews</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="bg-white rounded p-4 border-top border-4 text-center shadow box">
                    <img src="static/images/about/staff.png" width="117px">
                    <h4 class="mt-3">200+ STAFF</h4>
                </div>
            </div>
        </div>
    </div>

    <h3 class="my-5 fw-bold text-center">MANAGEMENT TEAM</h3>

    <div class="container px-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="static/images/about/team.jpg" class="w-100">
                    <h5 class="mt-2">Mr P.Sololo</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="static/images/about/team.jpg" class="w-100">
                    <h5 class="mt-2">Mr T. Dikolomela</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="static/images/about/team.jpg" class="w-100">
                    <h5 class="mt-2">Ms T. Marais</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="static/images/about/team.jpg" class="w-100">
                    <h5 class="mt-2">Ms O. Phihlela</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="static/images/about/team.jpg" class="w-100">
                    <h5 class="mt-2">Mr R. Mtshweni</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="static/images/about/team.jpg" class="w-100">
                    <h5 class="mt-2">Mr T. Taute</h5>
                </div>
                
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>


    <?php require('inc/footer.php') ?>

 <!-- Swiper JS -->
 <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
    },
    breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 4,
                },
            }
  });
</script>
    </script>
</body>

</html>