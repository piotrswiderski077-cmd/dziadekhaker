<?php
$conn = mysqli_connect("localhost", "root", "", "cwelniger");
if (!$conn){
    die("błąd połączenia z bazą");

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>centrum egzaminacyjne</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>

<div class="container">
    <h1>Centrum egzaminacyjne</h1>
    <a href="login.php">
        <button>Logowanie</button>
    </a>
</div>
    
</body>
</html>