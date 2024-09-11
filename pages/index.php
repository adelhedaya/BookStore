
<?php include '../shared/header.php'; 
function displayWelcomeMessage() {
    $username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest';
    echo "<h2>Welcome ,Let's Explore our BookStore</h2>";
}

displayWelcomeMessage();
?>

<?php
include '../shared/footer.php';;
?>
