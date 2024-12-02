<?php
    session_start();

    header('Content-Type: application/json');

    if (isset($_SESSION['userId'])) {
        $username = $_SESSION["username"];
        echo json_encode(["isLoggedIn" => "true", "username" => $username]);
    }
    else {
        echo json_encode(["isLoggedIn" => "false", "username" => "null"]);
    }
?>
