<?php

//Cokie nedir nasıl olusturulur.
/* $adsoyad="Cihat Can";
setcookie("adsoyad",$adsoyad);

echo $_COOKIE["adsoyad"];

//time 10 saniye burda kalıcak
$adsoyad="Cihat Can";
setcookie("adsoyad",$adsoyad,time()+3600);

echo $_COOKIE["adsoyad"];
*/
/* Cookie süre arttırma
strotime("+30 second") 30 saniye
strotime("+1 hours) 1 saat
strotime("+1day) 1 gün
*/
$adsoyad="Cihat Can";
setcookie("adsoyad",$adsoyad,strtotime("+1 week"));

echo $_COOKIE["adsoyad"];
//cookie silme

?>