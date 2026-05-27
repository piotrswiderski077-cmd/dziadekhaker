<?php 

session_start();

$conn = mysqli_connect("localhost", "root", "", "cwelniger");

include 'config.php';

$sql = "SELECT * FROM wyniki";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wyniki</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div class="container">
        <h2>Wyniki egzaminów</h2>
<?php
    while($row = mysqli_fetch_assoc($result)){
?>
<p> Punkty: <?php echo $row['punkty']; ?><br> 
    Wynik: <?php echo $row['wynik']; ?> </p>

    <hr>

<?php
    }
?>

</div>
    
</body>
</html>