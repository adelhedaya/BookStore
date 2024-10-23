<?php 
include '../shared/header.php'; 
include '../database/db.php'; 
include '../classes/book.php';
include '../classes/cart.php';
include '../shared/functions.php'; 

$preferred_currency = $_COOKIE['preferred_currency'] ?? 'USD';


$db = new Database();
$book = new Book($db->getConnection());
$cart = new Cart();

$books = $book->getBooks();

if (isset($_GET['add'])) {
    $bookId = $_GET['add'];
    $selectedBook = $book->getBookById($bookId);
    $cart->addToCart($selectedBook);
    
    echo "<div class='alert alert-success'>Added {$selectedBook['title']} to cart.</div>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <link rel="stylesheet" href="path/to/your/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        .book-item {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 20px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .book-item h3 {
            margin: 0;
            font-size: 1.5em;
            color: #333;
        }
        .book-item p {
            margin: 5px 0;
            color: #666;
        }
        .btn {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .alert {
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            color: #fff;
            background-color: #28a745;
        }
    </style>
</head>
<body>
    <div class="container">
    <?php foreach ($books as $book): ?>
            <div class="book-item">
                <div class="book-details">
                    <h3><?php echo htmlspecialchars($book['title']); ?> by <?php echo htmlspecialchars($book['author']); ?></h3>
                    
                    <?php
                    $price_in_usd = $book['price']; 
                    $converted_price = convertPrice($price_in_usd, $preferred_currency); 
                    ?>
                    <p>Price: <?php echo htmlspecialchars($converted_price); ?> <?php echo htmlspecialchars($preferred_currency); ?></p>
                </div>
                <a href="book.php?add=<?php echo $book['id']; ?>" class="btn">Add to Cart</a>
            </div>
            <?php endforeach; ?>
           </body>
           </html>

<?php include '../shared/footer.php'; ?>
