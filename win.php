<?php
    session_start();
    include "funcions.php";
    
    $_SESSION['partides']['guanyades'] += 1;
    if(isset($_POST['theme'])){
        $_SESSION['theme'] = $_POST['theme'];
    }

    afegirPartida($_POST['estadistiques']);
    mostrarPuntuacio();
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
<body id="body" class="body_win" name="body" onload="compararColorExecutarSo('guanyada')">
    <nav>
    <form action="index.php" method="post" id="formNom" name="formInici">
                <input class="disNone" type="text" name="theme" value="" id="colorDeTema">
            </form>
        <a onclick="cambiarPantallaSubmit()">
            <div>
                <?php echo $general['boto2'];?> 
            </div>
        </a>
        <a href="game.php">
            <div>
                <?php echo $general['boto1'];?> 
            </div>
        </a>
    </nav>

    <div id="resultadoPartida">
        <h1><?php echo $fiPartida['titleWin'];?></h1>
    </div>
    <br>
    <?php echo "<div id='nomUsuari'><strong>".$general['usuari'].$_SESSION['nom_usuari']."<br>". $fiPartida['punts'].$_SESSION['puntuacio'] ."</strong></div>\n<br>\n";
        ?>

    <h3><?php echo $fiPartida['estadistica'];?></h3>
    <div id="estadistiques">
        <?php
            mostrarPartides();
        ?>
        
    </div>
    <?php
       echo "<p id='colorAnterior' class='disNone'>".$_SESSION['theme']."</p>";
    ?>
</body>
</html>
