<?php 

session_start();

$conn = mysqli_connect("localhost", "root", "", "cwelniger");

    include 'config.php';
if(isset($_POST['data'])) {
    $nazwa = $_POST['nazwa'];
    $data = $_POST['data'];
    $miejsce = $_POST['miejsce'];

    $sql = "INSERT INTO egzaminy(nazwa, data_egzaminu, miejsce) VALUES('$nazwa', '$data', '$miejsce')";
    mysqli_query($conn, $sql);

    echo "Dodano egzamin";
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj egzamin</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>

<div class="container">
    <h2>Dodaj egzamin</h2>
    <form method="POST">
        <input type="text" name="nazwa" placeholder="Nazwa egzaminu">
    <input type="datetime-local" name="data">
        <input type="text" name="miejsce" placeholder="Miejsce">
    <button type="submit" name="dodaj"> Dodaj </button>
</form>
</div>

    
</body>
</html>