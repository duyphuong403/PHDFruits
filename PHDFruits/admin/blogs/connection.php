<?php
function getConnection()
{
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "phdfruits_db";

    $conn = mysqli_connect($host, $user, $pass, $dbname) or die ("Cannot connect to database");
    mysqli_set_charset($conn,'utf8');
    return $conn;
}
?>