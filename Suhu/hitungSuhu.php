<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Konversi Suhu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("temprature.png") no-repeat center center;
            background-size: cover;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: rgba(255, 255, 255, 0.2);
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            backdrop-filter: blur(10px);
            width: 350px;
        }

        .result-box {
            background: rgba(255, 255, 255, 0.8);
            padding: 15px;
            border-radius: 10px;
            color: black;
            margin-top: 10px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Hasil Konversi Suhu</h1>
    
    <?php
    if(isset($_POST["suhu"])) {
        $hitung = $_POST["suhu"];

        function kelvin($hitung){
            return $hitung + 273.15; // Perbaiki rumus
        }

        function fahrenheit($hitung){
            return 32 + (1.8 * $hitung);
        }

        $hasil_kelvin = kelvin($hitung);
        $hasil_fahrenheit = fahrenheit($hitung);
    ?>
    
    <div class="result-box">
        <p><strong>Derajat Celcius:</strong> <?= $hitung ?>°C</p>
        <p><strong>Derajat Fahrenheit:</strong> <?= $hasil_fahrenheit ?>°F</p>
        <p><strong>Derajat Kelvin:</strong> <?= $hasil_kelvin ?>K</p>
    </div>

    <a href="index.php" class="btn btn-primary mt-3">Hitung Ulang</a>

    <?php } else { ?>
        <p>Silakan masukkan suhu terlebih dahulu.</p>
        <a href="index.php" class="btn btn-primary mt-3">Kembali</a>
    <?php } ?>
</div>
</body>
</html>
