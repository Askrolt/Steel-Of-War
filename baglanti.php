<?php
    $host="localhost";
    $kullanici="root";
    $sifre="";
    $vt="war";

    $baglan=mysqli_connect($host,$kullanici,$sifre,$vt);
  
    if (!$baglan) 
    {
    die("Bağlantı Başarısız olmuştur".mysqli_connect_error());
    }
?>