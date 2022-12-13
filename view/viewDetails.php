<?php

    // error reporting
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once __DIR__ . "/../model/book.php";
    require_once __DIR__ . "/../data/bookDAO.php";

    session_start();

    $databaseConfig = new DatabaseConfig();
    $bookDAO = new bookDAO($databaseConfig);

// ---------------- Request Handlers ---------------------

    // view car
    if (isset($_GET['viewDetails'])) {

        // remove filter and load in a book by id via the BookDAO class
        $_SESSION['selectedBook'] = $bookDAO->readById($_GET['bookId']);    
        $selectedBook = $_SESSION['selectedBook'];
    }

    // purchase car
    if (isset($_POST['purchaseBook'])) {

        // save result of sellCar() method
        $result = $_SESSION['selectedBook']->sellBook();

        $bookDAO->updateSellBook($_SESSION['selectedBook']);

        if ($result) {

            // redirect to success page if car is sold successfully
            header("Location: ./success.php");

        } else {

            // send an http header that redirects to index.php and sets a GET variable called error with a value of 'soldout'

            // Cookies or a session variable can also be used if this doesn't make sense

            $_SESSION['outOfStock'] = true;

            header("Location: ./../index.php?error=soldout");
        
        }
    }

// ---------------- Request Handlers ---------------------
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $selectedBook->getGenre() . " " . $selectedBook->getTitle(); ?> <!--Print book name in title-->
    </title>
</head>
<body>

    <div class='item'>
        <?php
            echo "
                <img src='" . $selectedBook->getFilepath() . "' alt='thumb' width=350 height=200>
                <ul>
                    <li>". $selectedBook->getTitle() . "</li>
                    <li>". $selectedBook->getGenre() . "</li>
                    <li>R". $selectedBook->getPrice() . " per month</li>
                    ". $selectedBook->displayAvailibility() . "
                </ul>
                <form action='" . $_SERVER['PHP_SELF'] ."' method='post'>
                    <input type='hidden' name='bookTitle' value='" . $selectedBook->getTitle() . "'>
                    <button type='submit' name='purchaseBook' value='true'>Purchase</button>
                </form>
            ";
        ?>
    </div>
</body>
</html>
