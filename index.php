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
        <form action="badwords.php" method="GET">
            <label>Lasciaci un commento</label>
            <textarea name="paragraph" cols="30" rows="10" placeholder="Inserisci un commento" required></textarea>
            <div class="input-container">
                <input type="text" name="word" placeholder="Inserisci una parola da censurare" required>
            </div>
            <button type="submit">Invia</button>
        </form>
  </div>
</body>
</html>