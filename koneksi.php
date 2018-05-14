<?php

//Ini untuk koneksi 
$user_name = "root";
$password  = "";
$database  = "proyek"; 
$host_name = "localhost";
 
$connect_db=mysql_connect($host_name, $user_name, $password);
$find_db=mysql_select_db($database);
?>


