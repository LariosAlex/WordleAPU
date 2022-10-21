<?php
    session_start();
    include('funcions.php');
    $_SESSION['partides'] = ["perdudes" => 0,"guanyades" => [0 => 20,1=>4,2=>3]];
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Wordle</title>
</head>
<body id="index">
    <main>
        <h1>Benvingut al Wordle!</h1>
        <img src="./SRC/imatgeWordle.png" alt="">
        
        <form action="game.php" method="post">
            <input type="text" name="nom_usuari" required id="nom_usuari">
            <input type="submit" name="botoJugar" value="Jugar" id="butoJugar">
        </form>
        <div id="instruccions">
            <h1>INSTRUCCIONS</h1>
            <p>Qualsevol persona pot jugar a la paraula del dia.</p>
            <p>Lobjectiu és simple, endevinar la paraula oculta. La paraula té 5 lletres<br>i tens 6 intents per endevinar-la. La paraula és la mateixa per a totes<br>les persones en aquell dia.</p>
            <p>Cada intent ha de ser una paraula vàlida. A cada ronda el joc pinta<br>cada lletra d'un color indicant si aquesta lletra es troba o no a la<br>paraula i si es troba a la posició correcta.</p>
            <ul id="listaInstruccions">
                <li><strong>VERD</strong> significa que la lletra R està a la paraula ia la posició <strong>CORRECTA</strong>.</li>
                <li><strong>GROC</strong> significa que la lletra és present a la paraula però en la posició <strong>INCORRECTA</strong>.</li>
                <li><strong>GRIS</strong> significa que la lletra <strong>NO</strong> és a la paraula.</li>
            </ul>
        </div>
    </main>
    <footer>
        <p>Ies Esteve Terradas</p>
    </footer>
</body>
</html>
