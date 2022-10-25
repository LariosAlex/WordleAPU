<?php
    session_start();
    include "funcions.php";
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Wordle</title>
    <noscript>
        <META HTTP-EQUIV="Refresh" CONTENT="0;URL=errorJavascript.php">
    </noscript>
    <script src="./JS/funcions.js"></script>
</head>
<body onload="executarSo('../SRC/soGuanyar.mp3')">
    <div id="resultadoPartida">
    <h1>HAS GUANYAT!!</h1>
    </div>
    <?php 
        echo "<div id='nomUsuari'><strong>Usuari:".$_SESSION['nom_usuari']."</strong></div>\n<br>\n";
    ?>
    <h3>Estadistiques:</h3>
    <div id="estadistiques">
        <h4>Partides guanyades:</h4>
        <?php
            afegirPartida($_POST['estadistiques']);
            mostrarPartides();
        ?>

    </div>
</body>
</html> 