<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skenario 2</title>
</head>
<body>
    <h1>Skenario 2</h1>
</body>

<?php
$jam = date("02.00");
$jam = floatval($jam);

if ($jam >=00.00 && $jam <=04.00){
    echo "Dini Hari";
}else if ($jam >=04.00 && $jam <=10.00){
    echo "Pagi";
}else if ($jam >=10.00 && $jam <=15.00){
    echo "Siang";
}else if ($jam >=15.00 && $jam <= 17.30){
    echo "Sore";
}else if ($jam >=17.30 && $jam <= 18.30){
    echo "Petang";
}else if ($jam >=18.30 && $jam <= 24.00){
    echo "malam";
}else if ($jam >=00.00 && $jam <= 24.00){
    echo "Dunia Lain";
}
?>

<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 50px;
        }

        h1 {
            color: #2c3e50;
        }

        p {
            font-size: 20px;
            padding: 10px;
            border-radius: 5px;
            display: inline-block;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</html>