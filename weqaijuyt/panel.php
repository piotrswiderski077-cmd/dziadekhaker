<?php

session_start();



include 'login.php';
$conn = mysqli_connect("localhost", "root", "", "cwelniger");






?>



<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>

<div class="container">
    <h2>    Witaj   <?php echo $_SESSION['imie'];    ?> </h2>
    <p> Rola:   <?php echo $_SESSION['rola'];    ?> </p>

<a href="dodaj_egzamin.php">
    <button>Dodaj egzamin</button>
</a>

<a href="wyniki.php">
    <button>Wyniki</button>
</a>

<a href="logout.php">
    <button>Wyloguj</button>
</a>

</div>
    
</body>
</html>

<?php
mysqli_close($conn);
?>
