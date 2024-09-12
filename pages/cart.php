<?php include '../shared/header.php'; ?>
<?php
$exchange_rates = [
    'USD' => 1,       
    'EUR' => 0.91,    
    'EGP' => 30.85,    
    'AED' => 3.67,     
    'KWD' => 0.31   
];

$currency_symbols = [
    'USD' => '$',
    'EUR' => '€',
    'EGP' => 'E',
    'AED' => 'د.إ',
    'KWD' => 'د.ك'
];
$preferred_currency = $_COOKIE['preferred_currency'] ?? 'USD';
$exchange_rate = $exchange_rates[$preferred_currency];
$currency_symbol = $currency_symbols[$preferred_currency];

if (!empty($_SESSION['cart'])) {
    $total = 0;
    echo "<h2>Your Cart</h2>";
    echo "<ul class='list-group'>";

    foreach ($_SESSION['cart'] as $book) {
        $converted_price = $book['price'] * $exchange_rate;
        echo "<li class='list-group-item d-flex justify-content-between align-items-center'>";
        echo "{$book['title']} by {$book['author']} - {$currency_symbol}" . number_format($converted_price, 2);
        echo "</li>";
        $total += $converted_price;
    }

    echo "</ul>";
    echo "<p class='mt-3'>Total: <strong>{$currency_symbol}" . number_format($total, 2) . "</strong></p>";
} else {
    echo "<div class='alert alert-warning'>Your cart is empty.</div>";
}
?>

<?php include '../shared/footer.php'; ?>
