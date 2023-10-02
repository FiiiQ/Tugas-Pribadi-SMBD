<?php
require 'functions.php';

$username = $_POST["username"];
$password = $_POST["password"];
$whatsapp = $_POST["whatsapp"];
$napem= $_POST["napem"];
$nakost = $_POST["nakost"];
$foto = $_POST["foto"];
$lokasi = $_POST["lokasi"];
$fasilitas = $_POST["fasilitas"];
$harga = $_POST["harga"];

$query_sql = "INSERT INTO kost (username, password, whatsapp, napem, nakost, foto, lokasi, fasilitas, harga)
            VALUES ('$username', '$password', '$whatsapp', '$napem', '$nakost', '$foto', '$lokasi', '$fasilitas', '$harga')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: 5_login_kost.php");
} else {
    echo "Pendaftaran gagal : " . mysqli_error($conn);
}
?>