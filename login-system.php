<?php
$sname= "localhost";$unmae= "root";$password = "";$database= "login-tugas";
$conn = mysqli_connect($sname, $unmae, $password, $database);
if (!$conn) {    echo "Connection failed!";}
else{echo("berhasil harusnya");};
