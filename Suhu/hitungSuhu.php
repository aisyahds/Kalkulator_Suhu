<h1>Hasil Konversi Suhu</h1>
<?php
    if(isset($_POST["suhu"])){
        $hitung = $_POST["suhu"];
    

    function kelvin($hitung){
        $kelvin=273.15*$hitung;
        return $kelvin;
    }

    function fahrenheit($hitung){
        $fahrenheit = 32 + ((1.8)*$hitung);
        return $fahrenheit;
    }

    $hasil_kelvin = kelvin($hitung);
    $hasil_fahrenheit=fahrenheit($hitung);

    echo "Derajat Celcius: $hitung <br/>";
    echo "Derajat fahrenheit: $hasil_fahrenheit <br/>";
    echo "Derajat Kelvin: $hasil_kelvin <br/>";
    }
?>