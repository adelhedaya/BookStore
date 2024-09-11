<?php include '../shared/header.php'; ?>
<?php
if (!empty($_SESSION['cart'])) {
    $total = 0;
    echo "<h2>Your Cart</h2>";
    echo "<ul class='list-group'>";

    foreach ($_SESSION['cart'] as $book) {
        echo "<li class='list-group-item d-flex justify-content-between align-items-center'>";
        echo "{$book['title']} by {$book['author']} - \${$book['price']}";
        echo "</li>";
        $total += $book['price'];
    }

    echo "</ul>";
    echo "<p class='mt-3'>Total: <strong>\${$total}</strong></p>";
} else {
    echo "<div class='alert alert-warning'>Your cart is empty.</div>";
}
?>

<?php include '../shared/footer.php'; ?>
