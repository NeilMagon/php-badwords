<!-- Descrizione:
Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi.
Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi 
(***) tutte le occorrenze della parola da censurare -->
<?php
    $paragraph = $_GET['paragraph'];
    $word = $_GET['word'];
    $paragraphLength = strlen($paragraph);
    $wordCensored = str_replace($word, '***', $word);
    var_dump($paragraphCensored);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="container">
        <h1>PHP-Badwords</h1>
        <h3>Commento</h3>
        <div class="card">
            <p> <?php echo $paragraph; ?> </p>
            <p>Lunghezz di: <?php echo $paragraphLength; ?> caratteri</p>
        </div>
        <h3>Parola censurata</h3>
        <div class="card">
            <p> <?php echo $wordCensored; ?> </p>
        </div>
    </div>
</body>
</html>