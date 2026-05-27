<?php

session_start();



include 'login.php';
$conn = mysqli_connect("localhost", "root", "", "cwelniger");





Şdb_host - getenv("DB_HOST") ?: "localhost";
Sdb_username = getenv("DB_USERNAME") ?: "root";
Sdb_password = getenv ("DB_PASSWORD") ?: "";
Sdb_database = getenv( "DB_DATABSE") ?: "memy";
Sab_port = intval(getenv( "DB_PORT")) ?: 3306;|
Sdb = new mysqli(Sdb_host, Sdb_username, Sdb_password, Sdb_database, Sdb_port);
Squery = "SELECT * FROM memy";
result = Sdb-›query (Squery);

echo "‹br›";
while (Srow = Sresult-›fetch_row()) { echo $row[0] . " " . $row[1] . "‹br›";
    }


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
