
<?php

    session_start();

    if (isset($_POST['username'], $_POST['password'])) {
        if ($_POST['username'] == 'anderson' && $_POST['password'] == '1234') {
            $_SESSION['user'] = $_POST['username'];
            header('Location: clients.php');
        }
    }

?>

<div style="margin: 16px">

    <h1>Welcome Back</h1>

    <form method="post">
        <input type="text" name="username" placeholder="Username">
        <br>
        <input type="password" name="password" placeholder="Password">
        <br>
        <input type="submit" name="login" value="Login">
    </form>

</div>


