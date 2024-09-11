<?php include '../shared/header.php'; ?>
<?php
$book_prices = [
    'USD' => ['Data Structure' => 10, 'SQL' => 15, 'Algorithms' => 12, 'DataBase' => 70, 'AI' => 45, 'System Analysis' => 35],
    'EUR' => ['Data Structure' => 9, 'SQL' => 13, 'Algorithms' => 11, 'DataBase' => 60, 'AI' => 40, 'System Analysis' => 30],
    'EGP' => ['Data Structure' => 300, 'SQL' => 450, 'Algorithms' => 360, 'DataBase' => 2100, 'AI' => 1350, 'System Analysis' => 1050],
    'AED' => ['Data Structure' => 37, 'SQL' => 55, 'Algorithms' => 44, 'DataBase' => 260, 'AI' => 180, 'System Analysis' => 140],
    'KWD' => ['Data Structure' => 3, 'SQL' => 4.5, 'Algorithms' => 3.6, 'DataBase' => 21, 'AI' => 13.5, 'System Analysis' => 10.5]
];
$preferred_currency = $_COOKIE['preferred_currency'] ?? 'USD';
$prices = $book_prices[$preferred_currency];

echo "<h2>Our List of Books</h2>";
echo "<div class='row'>";

$books = [
    'Data Structure' => 'Hedaya Adel',
    'SQL' => 'Ali Mohamed',
    'Algorithms' => 'Ahmed Ali',
    'DataBase' => 'Hedaya Adel',
    'AI' => 'Mohamed Ahmed',
    'System Analysis' => 'Karim Ali Mohamed'
];

foreach ($books as $title => $author) {
    $price = $prices[$title] ?? 0;
    echo "<div class='col-md-4 mb-3'>";
    echo "<div class='card'>";
    echo "<div class='card-body'>";
    echo "<h5 class='card-title'>{$title}</h5>";
    echo "<p class='card-text'>by {$author}</p>";
    echo "<p class='card-text'>Price: {$preferred_currency} {$price}</p>";
    echo "<a href='book_detail.php?title={$title}' class='btn btn-primary'>Add to Cart</a>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
}

echo "</div>";
?>

<?php include '../shared/footer.php'; ?>
