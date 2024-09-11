<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <header class="bg-dark text-white text-center py-3">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="../pages/index.php">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="../pages/book.php">Book List</a></li>
                    <li class="nav-item"><a class="nav-link" href="../pages/cart.php">Cart</a></li>
                    <li class="nav-item"><a class="nav-link" href="../pages/preferences.php">Preferences</a></li>
                    <li class="nav-item"><a class="nav-link" href="../pages/logout.php">Log Out</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container my-4">
