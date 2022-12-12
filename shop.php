<?php

// error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once __DIR__ . "/model/book.php";
include_once __DIR__ . "/data/BookDAO.php";
include_once __DIR__ . "/config/DatabaseConfig.php";
require_once __DIR__ . "/inc/data.inc.php";


session_start();

// BookDAO and Database Config objects
$databaseConfig = new DatabaseConfig();
$bookDAO = new BookDAO($databaseConfig);

// remove session assignment and load in book data from Database
$bookData = $bookDAO->readAll();


if (isset($_GET['payment'])) {
    session_unset();
    header("Location: ../index.php?payment=successful");
}
// purchase book
if (isset($_POST['purchaseBook'])) {

    // save result of sellBook() method
    $result = $_SESSION['selectedBook']->sellBook();

    if ($result) {

        // redirect to success page if book is sold successfully
        header("Location: /views/success.php");
    } else {

        // send an http header that redirects to shop.php and sets a GET variable called error with a value of 'soldout'

        // Cookies or a session variable can also be used if this doesn't make sense

        $_SESSION['outOfStock'] = true;

        //header("Location: ./../shop3.php?error=soldout");
        header("Location: shop.php?error=soldout");
    }
}


// outOfStock request handler
if (isset($_SESSION['outOfStock']) && $_SESSION['outOfStock'] == true) {

    echo "
            <script>
                alert('Oops sorry about this error but it seems the book you wished to purchase is either sold or no longer available..');
            </script>
        ";

    unset($_SESSION['outOfStock']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP3</title>
    <?php
    require_once('inc/links.php');
    require_once("inc/header.php");
    ?>
</head>

<body>

    

        <?php
        foreach ($bookData as $i => $book) {
            echo "
                        <div class='container-fluid d-flex margin: auto;'>
                            <div class='container'>
                                <h3> Book No: " . ($i + 1) . " </h3>
                                    
                                            <div class='card border-0 shadow ' style='max-width: 350px; margin: auto;'>
                                                <img src='" . $book->getFilepath() . "' alt='thumb' width=350 height=200 class='card-img-top'>
                                                    <div class='card-body'>
                                                        <h5>" . $book->getTitle() . "</h5>
                                                        <h6  class='mb-4'>R" . $book->calcFullPrice() . "</h6>
                                                        <div class='features mb-4'>
                                                            <h6 class='mb-1'>Genre:</h6>
                                                                <span class='badge rounded-pill bg-light text-dark text-wrap'>
                                                                    <strong>" . $book->getGenre() . "</strong>
                                                                </span>
                                                                <span>" . $book->displayAvailibility() . "</span>


                                                            <form action='" . $_SERVER['PHP_SELF'] . "' method='post'>
                                                                <input type='hidden' name='bookTitle' value='" . $book->getTitle() . "'>
                                                                <button type='submit' name='purchaseBook' value='true'  class='btn btn-sn text-white custom-bg shadow-none'>Purchase</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                            </div>
                                    
                            </div>
                        </div>
                    ";
        }
        ?>
    

    

        <?php
        require_once("inc/footer.php")
        ?>
    

</body>

</html>