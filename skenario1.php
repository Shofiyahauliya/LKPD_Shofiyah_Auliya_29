<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skenario</title>
</head>
<body>
    <h1>skenario 1</h1>
    <p>
        <?php
        $nilai = "";
        
        if ($nilai >= 90 && $nilai <= 100){
            echo "Nilai Anda A";
        }else if ($nilai >= 80 && $nilai <= 89){
            echo "Nilai Anda B";
        }else if ($nilai >= 70 && $nilai <= 79){
            echo "Nilai Anda C";
        }else if ($nilai >= 0 && $nilai <= 69){
            echo "Nilai Anda D";
        }
        ?>
    </p>
</body>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin-top: 50px;
        }
        h1 {
            color: #333;
        }
        form {
            background-color: #fff;
            padding: 20px;
            display: inline-block;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        input {
            padding: 10px;
            margin: 10px;
            width: 100px;
            text-align: center;
        }
        button {
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .result {
            font-size: 20px;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<h1>Cek Nilai</h1>
<form method="POST">
    <label for="nilai">Masukkan Nilai:</label><br>
    <input type="text" name="nilai" id="nilai" required><br>
    <button type="submit" name="submit">Cek Keterangan</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $nilai = $_POST['nilai'];
    $keterangan = "";

    if (!is_numeric($nilai)) {
        $keterangan = "Masukkan angka yang valid!";
    } elseif ($nilai > 100 || $nilai < 0) {
        $keterangan = "Nilai wajib di antara 0 - 100";
    } elseif ($nilai >= 90) {
        $keterangan = "A";
    } elseif ($nilai >= 80) {
        $keterangan = "B";
    } elseif ($nilai >= 70) {
        $keterangan = "C";
    } else {
        $keterangan = "D";
    }

    echo "<div class='result'>Nilai <b>" . htmlspecialchars($nilai) . "</b> = <b>" . $keterangan . "</b></div>";
}
?>

</html>
