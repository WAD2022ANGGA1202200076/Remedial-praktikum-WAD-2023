<?php

$host='127.0.0.1';
$username='root';
$password='';
$database='wad_modul4_angga';

$koneksi = mysqli_connect($host,$username,$password,$database);

if(!$koneksi){
    die("Failed to connect to database");
}

?>