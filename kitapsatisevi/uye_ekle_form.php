

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
  include("include/ustmenu.php");
  include("include/yanmenu.php");
  
 ?>
   
    
   
    
    

  <div class="orta">
  <b> <h2 align="center" style="color:#000;">YENİ ÜYE</h2></b>
 
<table width="380" align="center" border="0"><tr><td colspan="2"><b>Üyelik Bilgileri</b></td></tr></table>
<table width="380" align="center" border="0">
<form action="" method="post"  enctype="multipart/form-data">
      <tr>
        <td width="139">Kullanıcı Adı*</td>
        <td width="8">:</td>
        <td width="219"><input  class="kutular" type="text" name="kullaniciadi" value="<?=$_POST[kullaniciadi]?>" /></td>
      </tr>
      <tr>
        <td width="139">E-posta*</td>	
        <td width="8">:</td>
        <td width="219"><input class="kutular" type="text" name="eposta" value="<?=$_POST[eposta]?>" /></td>
      </tr>
      <tr><td colspan="4" style="color:#666">
    (Şifrenizi oluştururken türkçe karakter kullanmayınız. En az 8 karakterden oluşturunuz. Şifreniz sadece rakam ve harflerden oluşmasın)</td></tr></table>
      <table width="380" align="center" border="0">
      <tr>
        <td>Şifre*</td>
        <td>:</td>
        <td><input type="text"  name="sifre" value="<?=$_POST[sifre]?>" /></td>
      </tr>
      <tr>
        <td>Şifre tekrar*</td>
        <td>:</td>
        <td><input type="text" class="kutular" name="sifretekrar" value="<?=$_POST[sifretekrar]?>" /></td>
      </tr>
      <tr>
        <td>Ad*</td>
        <td>:</td>
        <td><input type="text" class="kutular" name="ad" value="<?=$_POST[ad]?>" maxlength="11" /></td>
      </tr>
      <tr>
        <td>Soyad*</td>
        <td>:</td>
        <td><input type="text" class="kutular" name="soyad" value="<?=$_POST[soyad]?>" maxlength="11" /></td>
      </tr>
      <tr>
        <td>Cinsiyet*</td>
        <td>:</td>
         <td>
         <select class="kutular" name="cinsiyet">
         <option value="Bos" <?php if($cinsiyet=="Bos"){ echo "selected='selected'"; }?> >   </option>
           <option value="Bayan" <?php if($cinsiyet=="Bayan"){ echo "selected='selected'"; }?> >Bayan</option>
           <option value="Bay" <?php if($cinsiyet=="Bay"){ echo "selected='selected'"; }?> >Bay</option>
          
         </select>
       </td>
      </tr>
      <tr>
        <td>Doğum Tarihi*</td>
        <td>:</td>
        <td><input type="date" class="kutular" name="dtarih" value="<?=$_POST[dtarih]?>"  /></td>
      </tr>
	    <tr>
        <td>Doğum Yeri*</td>
        <td>:</td>
        <td><input type="text" class="kutular" name="dyeri" value="<?=$_POST[dyeri]?>" /></td>
      </tr>
       <tr>
        <td>Eğitim*</td>
        <td>:</td>
        <td><select name="egitim" />
            <option value="seçiniz" <?php if($egitim=="seçiniz"){ echo "selected='selected'"; }?> > seçiniz </option>
            <option value="İlkokul"  <?php if($egitim=="İlkokul"){ echo "selected='selected'"; }?> > İlkokul</option>
            <option value="Ortaokul" <?php if($egitim=="Ortaokul"){ echo "selected='selected'"; }?> > Ortaokul</option>
            <option value="Lise" <?php if($egitim=="Lise"){ echo "selected='selected'"; }?> > Lise</option>
            <option value="Lisans" <?php if($egitim=="Lisans"){ echo "selected='selected'"; }?> > Lisans</option>
             <option value="Yükseklisans" <?php if($egitim=="Yükseklisans"){ echo "selected='selected'"; }?> > Yükseklisans</option>
            </select></td>
        
      </tr>
      <tr>
        <td>Meslek*</td>
        <td>:</td>
        <td><input type="text" class="kutular" name="meslek" value="<?=$_POST[meslek]?>" /></td>
      </tr><tr></table>
      <table width="380" align="center" border="0"><tr><td colspan="2"><b>Adres Bilgilerim</b></td></tr>
      <tr>
      <td colspan="2" style="color:#666">
      (Üye olduktan sonra "Üyelik Bilgileri" sayfasından yeni adresler ekleyebilirsiniz)</td></tr></table>
      <table width="380" align="center" border="0">
      <tr>
        <td>Telefon*</td>
        <td>:</td>
        <td><input type="text" class="kutular" name="telefon" value="<?=$_POST[telefon]?>" maxlength="11" /></td>
      </tr>
      <tr>
      <td>Adres*</td>
      <td>:</td>
      <td colspan="2"><textarea name="adres" value="" cols="30" rows="5"></textarea></td>
      </tr>
        <tr>
       <td>İl*</td>
       <td>:</td>
       <td>
<select  name="il">
 			<option value="bos" <?php if($il=="bos"){ echo "selected='selected'"; }?> >   </option>
			<option value="Adana" <?php if($il=="Adana"){ echo "selected='selected'"; }?>>Adana</option>
            <option value="Adıyaman" <?php if($il=="Adıyaman"){ echo "selected='selected'"; }?>>Adıyaman</option>
            <option value="Afyon" <?php if($il=="Afyon"){ echo "selected='selected'"; }?>>Afyon</option>
            <option value="Ağrı" <?php if($il=="Ağrı"){ echo "selected='selected'"; }?>>Ağrı</option>
            <option value="Aksaray" <?php if($il=="Aksaray"){ echo "selected='selected'"; }?>>Aksaray</option>
            <option value="Amasya" <?php if($il=="Amasya"){ echo "selected='selected'"; }?>>Amasya</option>
            <option value="Ankara" <?php if($il=="Ankara"){ echo "selected='selected'"; }?>>Ankara</option>
            <option value="Ardahan" <?php if($il=="Ardahan"){ echo "selected='selected'"; }?>>Ardahan</option>
            <option value="Artvin" <?php if($il=="Artvin"){ echo "selected='selected'"; }?>>Artvin</option>
            <option value="Aydın" <?php if($il=="Aydın"){ echo "selected='selected'"; }?>>Aydın</option>
            <option value="Balıkesir" <?php if($il=="Balıkesir"){ echo "selected='selected'"; }?>>Balıkesir</option>
            <option value="Bartın" <?php if($il=="Bartın"){ echo "selected='selected'"; }?>>Bartın</option>
            <option value="Batman" <?php if($il=="Batman"){ echo "selected='selected'"; }?>>Batman</option>
            <option value="Bayburt" <?php if($il=="Bayburt"){ echo "selected='selected'"; }?>>Bayburt</option>
            <option value="Bilecik" <?php if($il=="Bilecik"){ echo "selected='selected'"; }?>>Bilecik</option>
            <option value="Bingöl" <?php if($il=="Bingöl"){ echo "selected='selected'"; }?>>Bingöl</option>
            <option value="Bitlis" <?php if($il=="Bitlis"){ echo "selected='selected'"; }?>>Bitlis</option>
            <option value="Bolu" <?php if($il=="Bolu"){ echo "selected='selected'"; }?>>Bolu</option>
            <option value="Bursa" <?php if($il=="Bursa"){ echo "selected='selected'"; }?>>Bursa</option>
            <option value="Çanakkale" <?php if($il=="Çanakkale"){ echo "selected='selected'"; }?>>Çanakkale</option>
            <option value="Çankırı" <?php if($il=="Çankırı"){ echo "selected='selected'"; }?>>Çankırı</option>
            <option value="Çorum" <?php if($il=="Çorum"){ echo "selected='selected'"; }?>>Çorum</option>
            <option value="Denizli" <?php if($il=="Denizli"){ echo "selected='selected'"; }?>>Denizli</option>
            <option value="Diyarbakır" <?php if($il=="Diyarbakır"){ echo "selected='selected'"; }?>>Diyarbakır</option>
            <option value="Düzce" <?php if($il=="Düzce"){ echo "selected='selected'"; }?>>Düzce</option>
            <option value="Edirne" <?php if($il=="Edirne"){ echo "selected='selected'"; }?>>Edirne</option>
            <option value="Elazığ" <?php if($il=="Elazığ"){ echo "selected='selected'"; }?>>Elazığ</option>
            <option value="Erzincan" <?php if($il=="Erzincan"){ echo "selected='selected'"; }?>>Erzincan</option>
            <option value="Erzurum" <?php if($il=="Erzurum"){ echo "selected='selected'"; }?>>Erzurum</option>
            <option value="Eskişehir" <?php if($il=="Eskişehir"){ echo "selected='selected'"; }?>>Eskişehir</option>
            <option value="Gaziantep" <?php if($il=="Gaziantep"){ echo "selected='selected'"; }?>>Gaziantep</option>
            <option value="Giresun" <?php if($il=="Giresun"){ echo "selected='selected'"; }?>>Giresun</option>
            <option value="Gümüşhane" <?php if($il=="Gümüşhane"){ echo "selected='selected'"; }?>>Gümüşhane</option>
            <option value="Hakkari" <?php if($il=="Hakkari"){ echo "selected='selected'"; }?>>Hakkari</option>
            <option value="Hatay" <?php if($il=="Hatay"){ echo "selected='selected'"; }?>>Hatay</option>
            <option value="Iğdır" <?php if($il=="Iğdır"){ echo "selected='selected'"; }?>>Iğdır</option>
            <option value="Isparta" <?php if($il=="Isparta"){ echo "selected='selected'"; }?>>Isparta</option>
            <option value="İstanbul" <?php if($il=="İstanbul"){ echo "selected='selected'"; }?>>İstanbul</option>
            <option value="İzmir" <?php if($il=="İzmir"){ echo "selected='selected'"; }?>>İzmir</option>
            <option value="Kahramanmaraş" <?php if($il=="Kahramanmaraş"){ echo "selected='selected'"; }?>>Kahramanmaraş</option>
            <option value="Karabük" <?php if($il=="Karabük"){ echo "selected='selected'"; }?>>Karabük</option>
            <option value="Karaman" <?php if($il=="Karaman"){ echo "selected='selected'"; }?>>Karaman</option>
            <option value="Kars" <?php if($il=="Kars"){ echo "selected='selected'"; }?>>Kars</option>
            <option value="Kastamonu" <?php if($il=="Kastamonu"){ echo "selected='selected'"; }?>>Kastamonu</option>
            <option value="Kayseri" <?php if($il=="Kayseri"){ echo "selected='selected'"; }?>>Kayseri</option>
            <option value="Kilis" <?php if($il=="Kilis"){ echo "selected='selected'"; }?>>Kilis</option>
            <option value="Kırklareli" <?php if($il=="Kırklareli"){ echo "selected='selected'"; }?>>Kırklareli</option>
            <option value="Kırıkkale" <?php if($il=="Kırıkkale"){ echo "selected='selected'"; }?>>Kırıkkale</option>
            <option value="Kırşehir" <?php if($il=="Kırşehir"){ echo "selected='selected'"; }?>>Kırşehir</option>
            <option value="Kocaeli" <?php if($il=="Kocaeli"){ echo "selected='selected'"; }?>>Kocaeli</option>
            <option value="Konya" <?php if($il=="Konya"){ echo "selected='selected'"; }?>>Konya</option>
            <option value="Kütahya" <?php if($il=="Kütahya"){ echo "selected='selected'"; }?>>Kütahya</option>
            <option value="Malatya" <?php if($il=="Malatya"){ echo "selected='selected'"; }?>>Malatya</option>
            <option value="Manisa" <?php if($il=="Manisa"){ echo "selected='selected'"; }?>>Manisa</option>
            <option value="Mardin" <?php if($il=="Mardin"){ echo "selected='selected'"; }?>>Mardin</option>
            <option value="Mersin" <?php if($il=="Mersin"){ echo "selected='selected'"; }?>>Mersin</option>
            <option value="Muğla" <?php if($il=="Muğla"){ echo "selected='selected'"; }?>>Muğla</option>
            <option value="Muş" <?php if($il=="Muş"){ echo "selected='selected'"; }?>>Muş</option>
            <option value="Nevşehir" <?php if($il=="Nevşehir"){ echo "selected='selected'"; }?>>Nevşehir</option>
            <option value="Niğde" <?php if($il=="Niğde"){ echo "selected='selected'"; }?>>Niğde</option>
            <option value="Ordu" <?php if($il=="Ordu"){ echo "selected='selected'"; }?>>Ordu</option>
            <option value="Osmaniye" <?php if($il=="Osmaniye"){ echo "selected='selected'"; }?>>Osmaniye</option>
            <option value="Rize" <?php if($il=="Rize"){ echo "selected='selected'"; }?>>Rize</option>
            <option value="Sakarya" <?php if($il=="Sakarya"){ echo "selected='selected'"; }?>>Sakarya</option>
            <option value="Samsun" <?php if($il=="Samsun"){ echo "selected='selected'"; }?>>Samsun</option>
            <option value="Siirt" <?php if($il=="Siirt"){ echo "selected='selected'"; }?>>Siirt</option>
            <option value="Sinop" <?php if($il=="Sinop"){ echo "selected='selected'"; }?>>Sinop</option>
            <option value="Sivas" <?php if($il=="Sivas"){ echo "selected='selected'"; }?>>Sivas</option>
            <option value="Şanlıurfa" <?php if($il=="Şanlıurfa"){ echo "selected='selected'"; }?>>Şanlıurfa</option>
            <option value="Şırnak" <?php if($il=="Şırnak"){ echo "selected='selected'"; }?>>Şırnak</option>
            <option value="Tekirdağ" <?php if($il=="Tekirdağ"){ echo "selected='selected'"; }?>>Tekirdağ</option>
            <option value="Tokat" <?php if($il=="Tokat"){ echo "selected='selected'"; }?>>Tokat</option>
            <option value="Trabzon" <?php if($il=="Trabzon"){ echo "selected='selected'"; }?>>Trabzon</option>
            <option value="Tunceli" <?php if($il=="Tunceli"){ echo "selected='selected'"; }?>>Tunceli</option>
            <option value="Uşak" <?php if($il=="Uşak"){ echo "selected='selected'"; }?>>Uşak</option>
            <option value="Van" <?php if($il=="Van"){ echo "selected='selected'"; }?>>Van</option>
            <option value="Yalova" <?php if($il=="Yalova"){ echo "selected='selected'"; }?>>Yalova</option>
            <option value="Yozgat" <?php if($il=="Yozgat"){ echo "selected='selected'"; }?>>Yozgat</option>
            <option value="Zonguldak" <?php if($il=="Zonguldak"){ echo "selected='selected'"; }?>>Zonguldak</option>
</select>
       </td>
      </tr>
        <tr>
        <td>İlçe*</td>
        <td>:</td>
        <td><input type="text" class="kutular" name="ilce" value="<?=$_POST[ilce]?>" maxlength="11" /></td>
      </tr>
      <tr>
        <td>Gizli Soru*</td>
        <td>:</td>
        <td><select name="gsoru"  />
            <option value="seciniz" <?php if($gsoru=="seciniz"){ echo "selected='selected'"; }?>>seçiniz </option>
            <option value="Dedenizin meslegi nedir?" <?php if($gsoru=="Dedenizin meslegi nedir?"){ echo "selected='selected'"; }?> >Dedenizin mesleği nedir?</option>
            <option value="Annenizin kizlik soyadi nedir?" <?php if($gsoru=="Annenizin kizlik soyadi nedir?"){ echo "selected='selected'"; }?> >Annenizin kızlık soyadı nedir?</option>
            <option value="En sevdiginiz renk hangisidir?" <?php if($gsoru=="En sevdiginiz renk hangisidir?"){ echo "selected='selected'"; }?> >En sevdiğiniz renk hangisidir?</option>
            </select></td>
        
      </tr>
      <tr>
        <td>Gizli Cevap*</td>
        <td>:</td>
        <td><input type="text"  name="gcevap" value="<?php echo $gcevap1; ?>" /></td>
      </tr>
	  <td>Resiminizi Seçiniz *</td>
    <td>:</td>
    <td><input type="file" name="resim"  /></td>
  </tr>
     
        <tr>
        <td><input class="kutular" type="submit" value="Kaydet" name="gonder"/></td>
      </tr>
     
     
       <tr> 
  <td><input type="reset" value="Temizle"/></td>
      </tr>

    </table>
    </form>
  
<br/>
<?php 

//verileri formdan çekme
 $kullaniciadi      =       trim($_POST["kullaniciadi"]);
 $ad				=		trim($_POST["ad"]);
 $soyad				=		trim($_POST["soyad"]);
 $eposta			=		trim($_POST["eposta"]);
 $sifre				=		trim($_POST["sifre"]);
 $sifretekrar		=		trim($_POST["sifretekrar"]);
 $cinsiyet			=		trim($_POST["cinsiyet"]);
 $dtarih			=		trim($_POST["dtarih"]);
 $dyeri			    =		trim($_POST["dyeri"]);
 $egitim			=		trim($_POST["egitim"]);
 $meslek			=		trim($_POST["meslek"]);        
 $gsm			    =		trim($_POST["telefon"]);
 $adres			    =		trim($_POST["adres"]);
 $il			    =		trim($_POST["il"]);
 $ilce			    =		trim($_POST["ilce"]);
 $gonder			=		trim($_POST["gonder"]);
 $gizlisoru			=		trim($_POST["gsoru"]);
 $gizlicevap 		= 		trim($_POST["gcevap"]);
//gerekli alanlar dolumu kontrol
$gerekli=(!empty($eposta) and !empty($kullaniciadi) and !empty($sifre) and !empty($sifretekrar) and !empty($ad) and !empty($soyad) and !empty($cinsiyet) and !empty($dtarih) and !empty($egitim) and !empty($meslek) and !empty($adres) and !empty($gsm) and !empty($gizlisoru) and !empty($gizlicevap) and !empty($_POST['resim']));
//şifre kontrol
$a =preg_match("@[0-9]@",$sifre);
$b =preg_match("@[a-z]@",$sifre);
$c =preg_match("@[A-Z]@",$sifre);
$d =preg_match("@[.,?*=]@",$sifre);
$e =preg_match("/(ç|Ç|ğ|Ğ|ı|İ|ö|Ö|ş|Ş|ü|Ü)+/",$sifre);
$epostakontrol=preg_match( "/^[a-zA-Z0-9\.]{6,30}(\@)[a-zA-Z0-9\.]{1,15}(\.)(com|net|org|gov)((\.)[a-z]{2})?$/",$eposta);

$sonuc = "<ul>";
$hata= 0;

//kullanici kontrol
		 $sql="SELECT KullaniciAd FROM kullanici WHERE KullaniciAd='".$kullaniciadi."'";
         $result=mysql_query($sql);
         $kayitSayisi=@mysql_num_rows($result);
//eposta kontrol
         $epos="SELECT Eposta FROM kullanici WHERE Eposta='".$eposta."'";
         $yenie=mysql_query($epos);
         $epostavar=@mysql_num_rows($yenie);
		
		//kaydete basarsa

 if($_POST['gonder']){
	
	    
           
	         //ŞİFRE KONTROLÜ
                 //şifreler eşitmi
                 if($sifre!=$sifretekrar){
		         $sonuc.= "<li>şifreler uyuşmuyo</li>";
				 $hata++;
				 }
				 //şifre karakteri
				 if(strlen($sifre) < 8 || strlen($sifre) > 16){
				 $sonuc .= "<li>parola 8 karakterden az veya 16 karakterden fazla</li>";
				 $hata++;
				 }
				 //şifre sayı kontrol
				 if(!$a){
				 $sonuc .= "<li>parola en az 1 adet sayı içermelidir</li>";
				 $hata++;
				 }
				 //şifre küçük harf kontrol
				 if(!$b){
				 $sonuc .= "<li>parola en az 1 adet küçük harf içermelidir </li>";
				 $hata++;
				 }
				 //şifre büyük harf kontrol
				 if(!$c){
				 $sonuc .= "<li>parola en az 1 adet büyük harf içermelidir </li>";
				 $hata++;
				 }
				 //şifre özel karakter kontrol
				if(!$d){
				 $sonuc  .= "<li>parola en az 1 adet özel karakter (. , ? * =) içermelidir</li>";
				 $hata++;
				 }
				 //şifre türkçe karakter kontrol
				if($e){
				 $sonuc  .= "<li>parola türkçe karakter(ç|Ç|ğ|Ğ|ı|İ|ö|Ö|ş|Ş|ü|Ü) içermemelidir</li>";
				 $hata++;
				 }
				 //eposta kontrol
				 if($epostavar>0){
				 $sonuc  .= "<li>bu eposta daha önce kullanılmıştır.</li>";
				 $hata++;
				 }
				 
	             //kullanıcı kontrol
				if($kayitSayisi>0){
				 $sonuc  .= "<li>bu kullanıcı adı daha önce kullanılmıştır.</li>";
				 $hata++;
				 }
				 //ekleyerek satırları yazdırma
				$sonuc .= "</ul>";
				//hata varsa
				if ($hata > 0)
				{
					echo "<h3>Aşağıd+aki $hata adet kuralı göz önünde bulundurunuz.</h3>";
					echo $sonuc;
				}
			    else
				{  
					if ($_FILES["resim"]["size"]<1024*1024){//Dosya boyutu 1Mb tan az olsun
				
					
					$dosya_adi=$_FILES["resim"]["name"];
					//Dosyaya yeni bir isim oluþturuluyor
					$uret=array("ku","rs","fg","ya","kb");
					$uzanti=substr($dosya_adi,-4,4);
					$sayi_tut=rand(1,10000);
					$yeni_ad="resim/".$uret[rand(0,4)].$sayi_tut.$uzanti;
					//Dosya yeni adýyla dosyalar klasörüne kaydedilecek
					if (move_uploaded_file($_FILES["resim"]["tmp_name"],$yeni_ad)){
						//veritabanına yazdırma
					 	$islem=mysql_query("INSERT INTO kullanici (KullaniciAd,Ad,Soyad,Eposta,Sifre,Dtarih,Dyeri,Adres,il,ilce,Gsm,Cinsiyet,OgrenimDurumu,Meslek,GizliSoru,GizliCevap, Resim) VALUES ('$kullaniciadi','$ad','$soyad','$eposta','$sifre','$dtarih','$dyeri','$adres','$il','$ilce','$gsm','$cinsiyet','$egitim',
			'$meslek','$gizlisoru','$gizlicevap', '$yeni_ad')");
	                   	echo "Kayıt tamamlandı Ana sayfaya tıklayarak üye girişe gidebilirsiniz:)
				";
              
						}else{
								echo 'Resim Yüklenmedi!';
							}
						
					}else{			
						echo 'Dosya boyutu 1 Mb ý geçemez!';
					}	
					

				}}
				

?>
  </div>
  <?php include("include/altmenu.php");?>
  
</div>


</body>
</html>
