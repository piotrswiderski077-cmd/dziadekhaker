<?php

$conn = mysqli_connect("localhost", "root", "", "cwelniger");

    session_start();
    session_destroy();
header("Location: config.php");
?>