<?php
    session_start();
    include('funcions.php');
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/joc_estil.css">
    
    <title>Wordle</title>
    <script src="../JS/funcions.js"></script>
</head>
<body>
    <h1></h1>
        <?php
            $paraula = $_POST['paraula'];
            $nomUsuari = $_POST['nom_usuari'];
        ?>
    <header>
        <?php echo "<div id='nomUsuari'><strong>Usuari: $nomUsuari</strong></div>\n<br>\n"; 
        ?>
    </header>
    <article>
        <div>
            <h1 id="resultat"></h1>
        </div>
        <div>
        <?php
            generarTaula(5,6);
        ?>
        </div>
    </article>
    <br>
    <article>
    <?php
        generarTeclat();
    ?>
    </article>
    <script src="../JS/funcions.js"></script>
    <?php
        $_POST['paraula'] = obtenirParaula('cat5.txt');
        echo "<p id='paraulaSecreta' hidden>".$_POST['paraula'] ."</p>";
    ?>
</body>
</html>
