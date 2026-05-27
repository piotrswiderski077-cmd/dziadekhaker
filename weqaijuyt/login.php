<?php
$conn = mysqli_connect("localhost", "root", "", "cwelniger");

include "config.php";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $haslo = $_POST['haslo'];

    $sql = "SELECT * FROM uzytkownicy WHERE email='$email' AND haslo='$haslo'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) >0) {
         $uzytkownik = mysqli_fetch_assoc($result);
         $_SESSION['id'] = $uzytkownik['id'];
         $_SESSION['rola'] = $uzytkownik['rola'];
         $_SESSION['imie'] = $uzytkownik['imie'];


         echo $uzytkownik['id'];
         echo $uzytkownik['rola'];
         echo $uzytkownik['imie'];



         header("Location: config.php");

    } else {
        echo "Błedne dane logowania";
        }
    }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <ling rel="stylesheet" href="styl.css">
</head>
<body>

<div class="container">
    <h2>Logowanie</h2>
    <form method="POST">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="haslo" placeholder="Hasło">
        <a href="panel.php" class="button">Zaloguj</a>
            
    </form>
</div>
    
</body>
</html>
<?php
mysqli_close($conn);
?>