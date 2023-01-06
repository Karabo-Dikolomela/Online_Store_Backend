<!DOCTYPE html>
<html lang="en">

<?php
include __DIR__ . "/inc/header.php";
include __DIR__ . "/model/book.php";

if (isset($_POST['Children']) || isset($_POST['Self_Help']) || isset($_POST['Fiction'])) {
    $bookID = Book::filter();
} else {
    $bookID = Book::getAllBooks();
}

?>


<body>
    <main>
        <!-- Filter Books Form -->
        <p class="display-6 text-center mt-2"><b>Filter by Genre</b></p>
        <div class="d-flex justify-content-center mt-3">
            <form action="./shop.php" method="post">
                <div class="input-group mb-3">
                    <button class="btn btn-outline-dark" type="submit" name="Children" value="Children">Children</button>
                    <button class="btn btn-outline-dark" type="submit" name="Self_Help" value="Self_Help">Self Help</button>
                    <button class="btn btn-outline-dark" type="submit" name="Fiction" value="Fiction">Fiction</button>
                </div>
            </form>
        </div>
        <!-- Filter Books Form END -->

        <!-- Cards: Display Books -->
        <div class="row row-cols-1 row-cols-lg-4 g-5 m-0">
            <?php if (!empty($bookID)) : ?>

                <?php foreach ($bookID as $id) : ?>
                    <?php $book = new Book($id['id']); ?>

                    <div class="col-md-3 d-flex justify-content-center">
                        <div class="card border-0 shadow">
                            <img src="./static/images/books/<?= $book->getImage() ?>" class="card-img-top book-image" alt="<?= $book->getTitle() ?>">
                            <div class="card-body">
                                <div class="text-center">
                                    <h5 class="card-title text-center"><?= $book->getTitle() ?> </h5>
                                    <p class="bookGenre text-center"><?= $book->getGenre() ?></p>
                                </div>
                                <p class="display-5 mt-3 text-center">R <?= $book->getPrice() ?></p>
                                <div class="d-flex flex-column align-items-center flex-fill">
                                    <span class="small"><?= $book->getStock() ?></span>
                                    <p class="display-7 mb-1">left!</p>
                                </div>
                                <div class="container">
                                    <div class="d-flex justify-content-evenly">
                                        <div class="mt-3">
                                            <form action="./process/session.php" method="post">
                                                <input type="hidden" name="bookId" value="<?= $book->getId() ?>">
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#bookModal<?= $book->getId() ?>"><i>Details</i></button>
                                                <?php if (isset($_SESSION['Cart']) === true) : ?>
                                                    <?php if (in_array($book->getId(), $_SESSION['Cart'])) : ?>
                                                        <button type="submit" name="Submit" class="btn btn-primary" disabled><i>Already in!</i></button>
                                                    <?php elseif ($book->getStock() == 0) : ?>
                                                        <button type="submit" name="Submit" class="btn btn-sn text-white custom-bg shadow-none" disabled><i>Out of Stock</i></button>
                                                    <?php else : ?>
                                                        <button type="submit" name="Submit" class="btn btn-sn btn-outline-dark shadow-none"><i>Add to Cart</i></button>
                                                    <?php endif ?>
                                                <?php elseif (empty($_SESSION["Cart"])) : ?>
                                                    <button type="submit" name="Submit" class="btn btn-primary" disabled><i>Log in to add!</i></button>
                                                <?php endif ?>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade mb-4" id="BookModal<?= $book->getId() ?>" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <form action="./process/session.php" method="post">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-4"><?= $book->getTitle() ?></h1>
                                        <p class="bookGenre"><?= $book->getGenre() ?></p>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Nah, lemme see others...</button>
                                        <?php if (isset($_SESSION['Cart']) === true) : ?>
                                            <?php if (in_array($book->getId(), $_SESSION['Cart'])) : ?>
                                                <button type="submit" name="Submit" class="btn btn-primary" disabled><i>Already in!</i></button>
                                            <?php elseif ($book->getStock() == 0) : ?> 
                                                <button type="submit" name="Submit" class="btn btn-danger" disabled><i>Out of Stock</i></button>
                                            <?php else : ?>
                                                <button type="submit" name="Submit" class="btn btn-primary"><i>Add to Cart</i></button>
                                            <?php endif ?>
                                            <?php elseif (empty($_SESSION["Cart"])) : ?> 
                                                <button type="submit" name="Submit" class="btn btn-danger" disabled><i>Log in to add!</i></button>
                                        <?php endif ?>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Modal END -->
                
    <?php endforeach ?>
<?php else : ?>
    <h2>Sorry, the request could not be completed. Go back and refresh your browser</h2>
<?php endif ?>
</div>

<!-- Cards: Display Games END -->
    </main>

    <?php require('inc/footer.php') ?>

</body>

</html>