<?php

include __DIR__ . "/../data/orderDAO.php";

class Order {

    // ========================= FIELDS =========================

    private $order_id;
    private $customer_id;
    private $buy_date;

    public function __construct($order_id, $customer_id, $book_id, $buy_date){

        $this->order_id = $order_id;
        $this->customer_id = $customer_id;
        $this->buy_date = $buy_date;

    }


    // ========================= METHODS =========================

    public static function addToCart() {
        $bookId = $_POST['bookId'];
        if (!in_array($bookId, $_SESSION['Cart'])) {
            
            array_push($_SESSION['Cart'], $bookId);
        }

        header("Location: ../cart.php");
        exit();

    }

    public static function displayCart() {
        if (empty($_SESSION['Cart'])) {
            echo "You have nothing in your cart yet!";
        } else {
            return ($_SESSION['Cart']);
        }
    }

    public static function removeItem() {
        $bookId = $_POST['bookId'];
        $index = array_search($bookId, $_SESSION['Cart']);
        unset($_SESSION['Cart'][$index]);

        header("Location: ../cart.php");
        exit();

    }

    public static function clearCart() {
        $_SESSION['Cart'] = [];

        header("Location: ../cart.php");
        exit();

    }

    public static function payCart() {
        OrderDAO::createOrder();
        $_SESSION['Cart'] = [];
        
        header("Location: ../order-paid.php");
        exit();

    }


    // ==================== GETTERS & SETTERS ====================

    public function getOrder_id() {
        return $this->order_id;
    }

    public function setOrder_id($order_id) {
        $this->order_id = $order_id;

        return $this;
    }

    public function getCustomer_id() {
        return $this->customer_id;
    }

    public function setCustomer_id($customer_id) {
        $this->customer_id = $customer_id;

        return $this;
    }

    public function getBuy_date() {
        return $this->buy_date;
    }

    public function setBuy_date($buy_date) {
        $this->buy_date = $buy_date;

        return $this;
    }
    
}