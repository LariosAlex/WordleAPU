<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Wordle</title>
<<<<<<< HEAD
    <noscript>
        <META HTTP-EQUIV="Refresh" CONTENT="0;URL=errorJavascript.php">
    </noscript>
</head>
<body>
    <div id="resultadoPartida">
        <h1>HAS GUANYAT!!</h1>
    </div>
=======
    <script src="./JS/funcions.js"></script>
</head>
<body onload="executarSo('../SRC/soGuanyar.mp3')">
    <h1>HAS GUANYAT!!</h1>
>>>>>>> spec21
    <?php echo "<div id='nomUsuari'><strong>Usuari:".$_SESSION['nom_usuari']."</strong></div>\n<br>\n";?>
    
</body>
</html>