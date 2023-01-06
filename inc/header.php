<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

include __DIR__ . "/links.php";
?>

<nav class="navbar navbar-expand-lg bg-light px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">

        <a class="navbar-brand me-5 fw-bold fs-3" href="index.php">
            <img class="navbar-brand w-0 d-flex center" src="static/images/logo/logo.jpg" width="70" height="64" alt="logo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="books.php">Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="shop.php">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="cart.php">Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
            </ul>
            <div>
                <?php if (isset($_SESSION['Cart']) === true) : ?>             
                        <a class="nav-link" href="./logout.php">
                            <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2">
                               logout
                            </button>
                        </a>             
                <?php else : ?>             
                        <a class="nav-link" href="./login.php">
                            <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2">
                                Login
                            </button>
                        </a>
                <?php endif ?>
            </div>
        </div>
    </div>
</nav>