<?php include '../shared/header.php'; ?>
<?php
include '../classes/cart.php';
include '../shared/functions.php';
$preferred_currency = $_COOKIE['preferred_currency'] ?? 'USD';


$cart = new Cart();
$cartItems = $cart->getCartItems();
$total = $cart->getTotalPrice();

if (count($cartItems) > 0) {
    echo "<h2>Your Cart</h2>";
    foreach ($cartItems as $item) {
        $converted_price = convertPrice($item['price'], $preferred_currency);
        echo "<p>{$item['title']} by {$item['author']}- Price: $converted_price $preferred_currency</p>";
    }
    $converted_total = convertPrice($total, $preferred_currency);
    echo "<h3>Total: $converted_total $preferred_currency</h3>";
} else {
    echo "<div class='alert alert-warning'>Your cart is empty.</div>";
}

include '../shared/footer.php';
?>
