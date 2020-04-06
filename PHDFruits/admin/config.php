<?php
$connect = mysqli_connect('localhost','root','','phdfruits_db') or die("Connect DB failed");
mysqli_set_charset($connect,'utf8');
$url_domain = 'http://localhost:8080/PHDFruits/admin/';
$domain = 'http://localhost:8080/PHDFruits/';
?>