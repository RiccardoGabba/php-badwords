<?php
$text = $_GET["text"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1> Inserisci testo </h1>
        <p><?php echo "$text"; ?></p>

        <form action="cancella" method="GET">
            <input type="text">
            <button type="submit">Cancella</button>
        </form>

    </header>
</body>
</html>