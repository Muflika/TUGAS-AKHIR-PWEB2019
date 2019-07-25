<!DOCTYPE html>
<html>
<head>
	<head>
	<title>Homepage</title> <!-----tag ini untuk membuat judul dari sebuah halaman---->
	<link rel="stylesheet" type="text/css" href="lika.css">
</head>
<body>
<div class="header"> <!-----tag <div> tag ini untuk membuat sebuah bagian dalam dokumen---->
		<h1>SELAMAT DATANG</h1>
		<div class="tabel">
		 <a href ="data.txt">FORM </a>
		</div>
	</div>
</head>


	<div class="content"> <!----- element content ini digunakan untuk menyisipkan (isi baik berupa teks maupun lainnya)--->
	
		<div class="main">
		</div>
		<div class="sidebar">
			<form> <!------form ini digunakan untuk menerima input dari pengunjung--->
				<br><input type="text" name="nama" placeholder="Masukkan Nama">
				<br><input type="number" name="nomer" placeholder="Masukkan NIM">
				<br><input type="email" name="email" placeholder="Masukkan Email">
				<br><select>
  					<option value="Teknik Informatika">Teknik Informatika</option>
					 <option value="Teknik Elektro">Teknik Elektro</option>
					 <option value="Teknik Pangan">Teknik Pangan</option>
					 <option value="Teknik Industri">Teknik Industri</option>
					 <textarea placeholder="pesan" rows="20px" cols="20px">
			</textarea> <!---- tag <textarea> tag ini digunakan untuk membuat sebuah kontrol input multibaris----->
			<button click type="submit">SUBMIT</button> <!------ tag <button> tag ini digunakan untuk membuat sebuah tombol yang dapat di klik---->
				</select>
			</form>
		</div>
	</div>
	<div class="footer"> <!----element ini untuk merepresentasikan sebuah catatan kaki/footer untuk elemen yang menaunginya ---->
		<p>&copy;COPYRIGHT MUFLIKA RAHMADANI-1800018052-YOGYAKARTA</p>		
<?php
$fl=fopen($file,"r+"); /* membuka file*/
$hit=fread($fl,filesize($filecounter)); /* membaca file*/
echo("<table width=250 align=center border=1 cellspacing=0 cellpadding=0
bordercolor=green><tr>");
echo("<td width=250 valign=middle align=center>");
echo("<font face=verdana size=2 color=geoip_db_get_all_info()><b>");
echo($hit);
echo("</b></font>"); /* mengubah ukuran teks warna */
echo("</td>");
echo("</tr></table>");
fclose($fl); /*menutup file */
$fl=fopen($file,"w+"); /*membuka file*/
$hit=$hit+1;
fwrite($fl,$hit,strlen($hit)); /*fungsi fwrite digunakan untuk menulis data ke file */
fclose($fl); /*menutup file */
?>
</body>
</html>