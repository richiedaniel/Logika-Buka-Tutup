<?php
date_default_timezone_set("Asia/Jakarta"); //Set UTC/GMT+7 Waktu Indonesia Barat  
$jambuka=strtotime("0800"); //Set 08.00 WIB 
$jamtutup=strtotime("2100"); //Set 21.00 WIB
$jamsekarang=time();
echo $jamsekarang < $jambuka || $jamsekarang>$jamtutup ? "Tutup":"Buka"; //Kondisi
?>