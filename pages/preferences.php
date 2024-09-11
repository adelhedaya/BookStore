<?php include '../shared/header.php'; ?>
<?php
$currencies = ['USD', 'EUR', 'EGP', 'AED', 'KWD'];
if (isset($_POST['currency'])) {
    setcookie('preferred_currency', $_POST['currency'], time() + (86400 * 30), "/");
    $message = "Currency preference saved as " . $_POST['currency'];
}

$preferred_currency = $_COOKIE['preferred_currency'] ?? 'USD';
?>

<h2>Preferences</h2>
<form method="POST" action="" class="form-inline">
    <div class="form-group mb-2">
        <label for="currency" class="mr-2">Select your preferred currency:</label>
        <select name="currency" class="form-control">
            <?php
            foreach ($currencies as $currency) {
                $selected = $currency == $preferred_currency ? 'selected' : '';
                echo "<option value='$currency' $selected>$currency</option>";
            }
            ?>
        </select>
    </div>
    <input type="submit" value="Save" class="btn btn-primary mb-2 ml-2">
</form>

<?php
if (isset($message)) {
    echo "<div class='alert alert-success mt-2'>$message</div>";
}
?>

<?php include '../shared/footer.php'; ?>
