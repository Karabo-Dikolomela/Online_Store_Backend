<?php

session_start();

include __DIR__ . '/../model/order.php';

Order::addToCart();