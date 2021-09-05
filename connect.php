<?php
/* Local Database*/

$servername = "remotemysql.com";
$username = "sRir8GlKji";
$password = "fsF8OOx9Wr";
$dbname = "sRir8GlKji";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



?> 