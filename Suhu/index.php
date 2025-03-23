<?php
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Suhu</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Konversi Suhu</h1>
        <form action="hitungSuhu.php" method="post">
            <label for="suhu">Suhu Celcius:</label>
            <input type="text" name="suhu" id="suhu" placeholder="Masukkan suhu dalam °C" required/>
            <hr/>
            <input type="submit" name="hitung" value="Konversi">
        </form>
    </div>
</body>
</html>
