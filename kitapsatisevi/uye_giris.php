﻿

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gossip Kitabevi</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="disdiv">
<?php

 include("include/ayar2.php");
 include("include/ustmenu.php");?>
  <?php include("include/yanmenu.php");?>
   
    
  
  <div class="orta">
<div class="uye"> 
      <strong>Üyelik Menüleri</strong>
      <form action="" method="POST">
E- mail<input name="Eposta" type="text" value=""/>
<br/>
Sifre:<input name="Sifre" type="text" value""/>
<br/>
<a href="uye_ekle_form.php">Kayit olmak icin tiklayiniz</a>
<br/>
<a href="sifremi_unuttum.php">Sifremi Unuttum </a>
<br/>
<input type="submit" value="Gonder" name="gonder"/>
</form>
    </div>

<?php




 $Eposta	=	trim($_POST['Eposta']);
 $Sifre 	=	trim($_POST['Sifre']);


 if(isset($_POST['gonder']) and !empty($Eposta) and !empty($Sifre)){
     
    
$sql =  mysql_query("select * from kullanici where Eposta ='$Eposta' and  Sifre='$Sifre'");

while($dizi=  mysql_fetch_array($sql)){
//yonetici
 
	$_SESSION['idKullanici']=$dizi['idKullanici'];
	$_SESSION['KullaniciAd']=$dizi['KullaniciAd'];   
	$_SESSION['Durum']=$dizi['Durum'];
	$_SESSION['Onay']=$dizi['Onay'];
	if(!isset($dizi)){ echo "Yanlış Sifre Veya E-Posta";}
	elseif(($dizi['Eposta']==$Eposta) and ($dizi['Sifre']==$Sifre) and ($dizi['Durum']==1)){
	
	
        echo "Yonetici sayfasina yonlendiriliyorsunuz.";
	
		
        header("Refresh:1; url=yonetici.php");
	
}
//kullanici
     elseif(($dizi['Eposta']==$Eposta) and ($dizi['Sifre']==$Sifre) and ($dizi['Durum']==2) and ($dizi['Onay']==1)){
  
	echo "Giris sayfasasina yonlendiriliyorsunuz.";
	
            header("Refresh:1; url=index.php");
			
} else	echo 'Bu sayfaya erisiminiz yok.Yönetici Onayında ';
    
    
 }
 
 }
 else	{ echo "Boş alanları doldurunuz"; }


?>
<br/>

</div>
 
  <?php include("include/altmenu.php");?>
   

  
</div>


</body>
</html>
