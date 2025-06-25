<?php
$host="localhost";
$user="smansab2_presensia";
$password="Suks3sb3rs4m4";
$db="smansab2_presensia";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
	  die("Koneksi gagal:".mysqli_connect_error());
}
?>