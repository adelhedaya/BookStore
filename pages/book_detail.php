<?php include '../shared/header.php'; ?>

<?php
if (isset($_GET['index'])) {
    $books = [
        ['title' => 'Data Structure', 'author' => 'Hedaya Adel', 'price' => 10],
        ['title' => 'SQL', 'author' => 'Ali Mohamed', 'price' => 15],
        ['title' => 'Algoritms', 'author' => 'Ahmed Ali', 'price' => 12],
        ['title' => 'DataBase', 'author' => 'Hedaya Adel', 'price' => 70],
        ['title' => 'AI', 'author' => 'Mohamed Ahmed', 'price' => 45],
        ['title' => 'System Analysis', 'author' => 'Karim Ali MOhamed', 'price' => 35],
    ];

    $book = $books[$_GET['index']];
    $_SESSION['cart'][] = $book;

    echo "<div class='alert alert-success'>Book Added to Cart: {$book['title']} by {$book['author']} - \${$book['price']}</div>";
}
?>

<form method="POST" action="book_detail.php" class="mt-4">
    <div class="form-group">
        <label for="name">Your Name:</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="email">Your Email:</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <input type="submit" value="Purchase" class="btn btn-success">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    echo "<div class='alert alert-info mt-4'>Thank you, $name! A confirmation email has been sent to $email.</div>";
}
?>

<?php include '../shared/footer.php'; ?>
