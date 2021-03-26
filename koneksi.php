<?php 
$host      ="localhost";
$user      ="root"; //user pada phpmyadmin
$password  =""; //jika tidak ada password cukup ditulis ""
$database  ="portofolio"; //namadatabase
$connect   =mysqli_connect($host,$user,$password,$database) or die ("gagal menghubungkan"); //mengecek apakah sudah terkoneksi dengan database
?>