<?php

    include 'validation.php';

    $name = $_SESSION['user'];

    echo   "<body style=\"background-color: lightblue;\">
                <h1>Client - $name</h1>
                <a href=\"products.php\" style=\"background-color: red; padding: 10px; text-decoration: none; color: white; border-radius: 10px\">My Products</a>
                <a href=\"logout.php\" style=\"background-color: red; padding: 10px; text-decoration: none; color: white; border-radius: 10px\">Log out</a>
            </body>";

?>