<?php
$servername = "localhost";
$username = "auth_site";
$password = "auth@mariadb";
$dbname = "auth";
// CREATE DATABASE auth;
// GRANT ALL ON auth.* to auth_site@localhost IDENTIFIED BY 'auth@mariadb'
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname) or
    die("Connection failed: " . $conn->connect_error);
?>
