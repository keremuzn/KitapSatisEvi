<div class="yanbar"> 
<?php 

$sid1=$_SESSION["idKullanici"];
$sec1=mysql_query("select Resim from kullanici where idKullanici='$sid1'");
$bilgi1=mysql_fetch_array($sec1);

?>
<table><tr>
        <td width="356" align="left"><?php echo"<img src=$bilgi1[Resim] width='150' height='120' />" ; ?></td>
      </tr>
      <tr>
       <?php echo " Hoşgeldiniz $_SESSION[KullaniciAd] <br>"; ?>
       
      </tr>
       <tr>
       <?php $tiklanma=mysql_query("Select * from log where Sayfa='AnaSayfaya Girdi'");
$tiklanmasayi=mysql_num_rows($tiklanma);
echo "Anasayfaya $tiklanmasayi Defa Tıklandı"; ?>
       
      </tr>
      </table>
    <p><a href="uye_profil.php">Profil Bilgileri</a></p>
    <p><?php if(($_SESSION['Durum']==1)){
		echo "<a href='yonetici.php'>Yonetici Sayfası</a>"; }
	?>
    </p>
    <p><strong>Kategoriler</strong>
    </p>
    <ul>
      <li><a href="kategori.php?bilgi=Bilim">Bilim</a></li>
      <li><a href="kategori.php?bilgi=Edebiyat">Edebiyat</a></li>
      <li><a href="kategori.php?bilgi=Sanat">Sanat</a></li>
      <li><a href="kategori.php?bilgi=Sinema">Sinema</a></li>
      <li><a href="kategori.php?bilgi=Tarih">Tarih</a></li>
    </ul>
   
        <div class="arama">
        <form action="kitaparama.php" method="POST">
        <input type="text" name="kitapara" placeholder="Kitap Arama" /><br />
        <input type="reset" value="Temizle"/>
        <input type="submit" value="Ara" name="gonder"/></form><hr/>
        <form action="yazararama.php" method="POST">
        <input type="text" name="yazarara" placeholder="Yazar Arama" /><br />
        <input type="reset" value="Temizle"/>
        <input type="submit" value="Ara" name="gonder"/></form>
       </div>
    
    
  </div>
  