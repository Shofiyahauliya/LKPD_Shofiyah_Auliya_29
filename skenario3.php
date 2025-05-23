<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Harian Andi</title>
    </head>
    <body>

<?php
date_default_timezone_set("Asia/Jakarta"); 

$nama1 = "Octavia Anindyta B. U.";
$nama2 = "Shofiyah Auliya";

$tiba_rumah = "15:45";
$mandi = "15:45 - 16:00";
$mengaji = "16:00 - 16:30";
$tugas_sekolah = "16:30 - 18:30";
$menghafal = "18:30 - 19:00";
$membeli_bumbu = "Sebelum makan malam";
$sholat_maghrib = "18:00";
$makan_malam = "Setelah sholat maghrib, sebelum isya";
$sholat_isya = "19:15";
$chatting_start = "17:00";
$chatting_duration = 30; 
$tidur = "22:00";
$bangun = "04:00";
$chatting_time_raya = date("H:i", strtotime("+4 hours", strtotime($chatting_start)));
$tugas_ada = true; 


if ($tugas_ada) {
    $waktu_luang = 22 - 18.5 - 0.5;
} else {
    $waktu_luang = 22 - 16; 
}
?>

<h1>Jadwal Harian Andi</h1>
<h3>Dibuat oleh: <?php echo $nama1 . " dan " . $nama2; ?></h3>

<table>
    <tr>
        <th>Waktu</th>
        <th>Kegiatan</th>
    </tr>
    <tr>
        <td><?php echo $tiba_rumah; ?></td>
        <td>Andi tiba di rumah</td>
    </tr>
    <tr>
        <td><?php echo $mandi; ?></td>
        <td>Andi mandi</td>
    </tr>
    <tr>
        <td><?php echo $mengaji; ?></td>
        <td>Andi mengaji</td>
    </tr>
    <?php if ($tugas_ada) { ?>
    <tr>
        <td><?php echo $tugas_sekolah; ?></td>
        <td>Andi mengerjakan tugas sekolah</td>
    </tr>
    <?php } ?>
    <tr>
        <td><?php echo $menghafal; ?></td>
        <td>Andi menghafal dialog festival</td>
    </tr>
    <tr>
        <td><?php echo $sholat_maghrib; ?></td>
        <td>Sholat Maghrib</td>
    </tr>
    <tr>
        <td><?php echo $membeli_bumbu; ?></td>
        <td>Andi membeli bumbu masakan</td>
    </tr>
    <tr>
        <td><?php echo $makan_malam; ?></td>
        <td>Makan malam bersama keluarga</td>
    </tr>
    <tr>
        <td><?php echo $sholat_isya; ?></td>
        <td>Sholat Isya</td>
    </tr>
    <tr>
        <td><?php echo $chatting_start . " - " . date("H:i", strtotime("+30 minutes", strtotime($chatting_start))); ?></td>
        <td>Chatting dengan Raya (di Arab jam <?php echo $chatting_time_raya; ?>)</td>
    </tr>
    <tr>
        <td>21:30 - 22:00</td>
        <td>Mengobrol bersama keluarga</td>
    </tr>
    <tr>
        <td><?php echo $tidur; ?></td>
        <td>Andi tidur</td>
    </tr>
</table>

<h2>Waktu Luang</h2>
<p><?php echo ($tugas_ada) ? "Waktu luang Andi: " . round($waktu_luang, 1) . " jam" : "Tanpa tugas, Andi punya waktu luang: " . round($waktu_luang, 1) . " jam"; ?></p>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }
        h1 {
            color: #333;
        }
        table {
            width: 50%;
            margin: auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
        }
        th {
            background-color: #ddd;
        }
    </style>
</body>
</html>
