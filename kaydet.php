<?php
$kullaniciadi="root";
$sifre= "";
$host="localhost";
$veritabani="basvuruformu";

$baglan=mysqli_connect($host,$kullaniciadi,$sifre);
mysqli_select_db($baglan,$veritabani);

$tckimlik = $_POST["tckimlik"];
$ogr_no = $_POST["ogr_no"];
$ogr_ad = $_POST["ogr_ad"];
$ogr_soyad = $_POST["ogr_soyad"];
$fakulte = $_POST["fakulte"];
$bolum = $_POST["bolum"];
$email = $_POST["email"];

$sql="insert into tbl_basvuruformu (tckimlik, ogr_no, ogr_ad, ogr_soyad, fakulte, bolum, email) "
        . "values ('$tckimlik','$ogr_no','$ogr_ad', '$ogr_soyad','$fakulte','$bolum','$email')";

mysqli_query($baglan,$sql);
mysqli_close($baglan);
?>