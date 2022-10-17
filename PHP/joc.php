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
</head>
<body>
        <?php
            $nomUsuari = $_POST['nom_usuari'];
        ?>
    <header>
        <?php echo "<div id='nomUsuari'><strong>$nomUsuari</strong></div>\n<br>\n"; 
        ?>
    </header>
    <article>
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
</body>
</html>
