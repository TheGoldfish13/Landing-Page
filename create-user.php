<?php
    require_once(__DIR__ . "/config.php");

    $email   = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
    $info   = filter_input(INPUT_POST, "info", FILTER_SANITIZE_STRING);

    $query = $_SESSION["connection"]->query("INSERT INTO contact_me SET "
           .  "email = '$email',"
           .  "info = '$info'");

    if ($query) {
         echo "Successfully created users: $username";


    }
    else {
         echo "<p>" . $_SESSION["connection"]->error. "</p>";
    }




