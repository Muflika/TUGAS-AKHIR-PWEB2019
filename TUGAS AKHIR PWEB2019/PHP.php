
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