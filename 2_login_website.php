<?php
require '0_functions.php';

$username = $_POST["username"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM users
            WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($conn, $query_sql);

if(mysqli_num_rows($result) > 0){
    header("Location: 3_index.html");
} else {
    echo "Anda memasukkan username / password yang salah";{
        header("Location: 2_login_website.html");
    }
}
?>