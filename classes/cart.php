<?php
class Cart {
    public function connect() {
        if (!isset($_SESSION)) {
            session_start();
        }
    }
    public function addToCart($book) {
        $_SESSION['cart'][] = $book;
    }
    public function getCartItems() {
        return isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
    }
    public function getTotalPrice() {
        $total = 0;
        if (isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $item) {
                $total += $item['price'];
            }
        }
        return $total;
    }
   
}
