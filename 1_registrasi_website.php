<?php
require '0_functions.php';

$username = $_POST["username"];
$password = $_POST["password"];

$query_sql = "INSERT INTO users (username, password)
            VALUES ('$username', '$password')";

if (mysqli_query($conn, $query_sql)){
    header("Location: 2_login_website.html");
} else {
    echo "Pendaftaran gagal : " . mysqli_error($conn);
}
?>