﻿<?php
error_reporting(0); //0 değeri oluşan tüm hataları gizler.
session_start();
 if(!$_SESSION['idKullanici'] or ($_SESSION['Onay'])==0 ){
	  header("location:uye_giris.php");
	  }
	  $tarihlog=date("Y-m-d G:i:s");
$host="localhost";
$kadi="e153237";
$ksifre="q!";
$vt="e153237";
$con=mysql_connect($host,$kadi,$ksifre)or die("sql e baglanilamadi".mysql_error());
$vtsec=mysql_select_db($vt,$con)or die("vt ye baglanilamadi".mysql_error());
mysql_query("set name utf8");
mysql_query("set character set utf8");
mysql_query("set collection_connection= 'utf8_turkish_ci'");


?>