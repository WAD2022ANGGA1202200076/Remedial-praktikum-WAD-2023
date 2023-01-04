<?php

$host='127.0.0.1';
$username='root';
$password='';
$database='db_modul3';

$koneksi = mysqli_connect($host,$username,$password,$database);

if(!$koneksi){
    die("Failed to connect to database");
}

?>