<?php
$text = $_GET["text"];
$ban = $_GET["ban"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
    <h1>testo inserito:<?php  echo " $text"; ?></h1>
    <h1>parola bannata:<?php  echo " $ban"; ?></h1>
    <?php $banned = str_replace ($ban,"***",$text ); ?>
    <h1>risultato finale: <?php  echo "$banned"; ?></h1>
    
    
</body>
</html>