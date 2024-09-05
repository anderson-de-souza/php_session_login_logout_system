
<?php

    if (isset($_GET['error'])) {
        $error = 'error: needs log in to access the system';
    }

?>

<body style="background-color: lightblue;">
    <h1>Welcome To My Store</h1>
    <a href="login.php" style="background-color: red; padding: 10px; text-decoration: none; color: white; border-radius: 10px">Log in</a>
    <br>
    <div style="display: inline-block; background-color: coral; margin: 16px">
        <?php echo $error ?? ''; ?>
    </div>
</body>
