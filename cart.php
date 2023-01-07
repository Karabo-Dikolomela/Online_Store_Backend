<!DOCTYPE html>
<html lang="en">

<?php
require_once('inc/header.php');
include __DIR__ . "/model/book.php";
include __DIR__ . "/model/order.php";

?>


<body>
    <main>
        <!-- Hero -->
        <div class="jumbotron mt-5 p-3 p-md-5 text-dark bg-light">
            <div class="col-md-6 px-0">
                <h1 class="display-4">Your shopping <i>Cart</i></h1>
            </div>
        </div>
        <!-- Hero END -->

        <!-- Cart List  -->
        <div class="table-responsive m-5">

            <table class="table table-hover table-responsive-md">
            <?php if(!empty($_SESSION['Cart'])) : ?>
                <thead>
                    <tr>
                        <th>Book</th>
                        <th>Genre</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <?php endif ?>
                <tbody class="table-group-divider">
                    <?php $cart_total = 0; ?>
                    <?php if (!empty($_SESSION['Cart'])) : ?>
                        <?php foreach ($_SESSION['Cart'] as $id) : ?>
                            <?php $item = new Book($id); ?>
                            <?php $cart_total = $cart_total + $item->getPrice(); ?>
                            <tr>
                                <td><?= $item->getTitle() ?></td>
                                <td><?php if($item->getIs_self_help()) {
                                    echo "Self-Help";
                                } elseif($item->getIs_children()) {
                                    echo "Children";
                                } else{
                                    echo "Fiction";
                                }
                                ?>
                                </td>
                                <td><?= $item->getGenre() ?></td>
                                <td>R <?= $item->getPrice() ?></td>
                                <td>
                                    <form action="./process/remove-cart-item.php" method="post">
                                        <input type="hidden" name="bookId" value="<?= $item->getId() ?>">
                                        <button type="submit" name="Submit" class="btn btn-light">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    <?php else : ?>
                        <h2 class="text-center">Your 🛒 is empty...</h2>
                    <?php endif ?>
                </tbody>
                <?php if(!empty($_SESSION['Cart'])) : ?>
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Total</th>
                            <th>R <?= $cart_total ?></th>
                            <th><form action="./process/cart-pay.php" method="post">
                                    <button type="submit" name="Submit" class="btn btn-light">
                                        <i>Pay</i>
                                    </button>
                                </form>
                            </th>
                        </tr>
                    </thead>
                <?php endif ?>
            </table>
            <?php if(!empty($_SESSION['Cart'])) : ?>
                <form action="./process/clear-cart.php" method="post">
                    <button type="submit" name="Submit" class="btn btn-primary">
                        Clear Cart
                    </button>
                </form>
            <?php endif ?>
        </div>
    </main>

    <?php require('inc/footer.php') ?>

</body>

</html>