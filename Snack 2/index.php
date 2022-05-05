<?php 


$name = ( isset( $_GET['name']) ) ? $_GET['name'] : '';
$email = ( isset( $_GET['email']) ) ? $_GET['email'] : '';
$age = ( isset( $_GET['age']) ) ? $_GET['age'] : '';



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <main>
        <form method="get">
            <input name="name" placeholder="Inserisci il tuo nome" type="text">
            <input name="email" placeholder="Inserisci la tua E-mail" type="text">
            <input name="age" placeholder="Inserisci la tua età" type="text">
            <button type="submit">Invia</button>
        </form>
        <?php
        if ( strlen($name) > 3 && strpos($email, "@" ) !== false && strpos($email, "." ) !== false && is_numeric($age)) {
            echo "<p>Accesso riuscito</p>";
         }
        ?>
    </main>
</body>
</html>