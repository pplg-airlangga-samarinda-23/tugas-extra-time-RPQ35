<?php
session_start(); 

// Database connection
$sname = "localhost";
$unmae = "root";
$password = "";
$database = "login-tugas";
$conn = new mysqli($sname, $unmae, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());}
    ?>