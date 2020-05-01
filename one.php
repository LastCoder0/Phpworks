<?php
echo "Cihat Php Yeni Başladin";
print 'Cihat 2';

?>
<hr>
<?php
//bu bir yorum satiridir.
#yorum satiri.
/*  Buda yorum satiridir*/
echo "cihat"."birlestirildi";
?>
<hr>
<?php
 $ad="cihat";
 $soyad="can";
 $yas=24;
 echo $ad.$soyad.$yas."yasindadir";
 echo "<br/>";
?>
<?php
$sayi;
$sayi=rand(1,6);
if($sayi>4)
{
echo "Tebrikler kazandiniz";
}
else
{
    echo "Tekrar Deneyiniz,Kaybettiniz";
}
?>
<?php
echo "<br>";echo "<br>";
$ad="cihat";
echo "Ben $ad \"udemy\" kursa kayit olmak istiyorum ";

//Hazır String fonksiyonları
//strlen 
//substr metnin ilk harfi büyük
$yazi="bu bir yazidir";
echo $yazi=ucwords($yazi);
echo "<br>";
$yazibuyuk="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc a vestibulum dolor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis non eros eu felis tincidunt cursus. Integer et lacus accumsan, vestibulum nisi eget, pharetra mauris. Sed scelerisque pretium nulla, eget ultrices risus sollicitudin id. Quisque id est tempor, aliquet mauris eget, convallis nulla. Aenean vel nisl quis tortor sollicitudin gravida. Proin feugiat sem sed consequat mattis.

Curabitur eu enim imperdiet, imperdiet urna a, tincidunt ligula. Ut convallis efficitur ultrices. Donec a tempus tortor. Nullam eget lacus mollis, porta urna eu, sagittis orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin ullamcorper varius sem. Maecenas facilisis sed ante sit amet porttitor. Nam mollis pulvinar tincidunt. Cras at consectetur mi.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc a vestibulum dolor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis non eros eu felis tincidunt cursus. Integer et lacus accumsan, vestibulum nisi eget, pharetra mauris. Sed scelerisque pretium nulla, eget ultrices risus sollicitudin id. Quisque id est tempor, aliquet mauris eget, convallis nulla. Aenean vel nisl quis tortor sollicitudin gravida. Proin feugiat sem sed consequat mattis.

Curabitur eu enim imperdiet, imperdiet urna a, tincidunt ligula. Ut convallis efficitur ultrices. Donec a tempus tortor. Nullam eget lacus mollis, porta urna eu, sagittis orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin ullamcorper varius sem. Maecenas facilisis sed ante sit amet porttitor. Nam mollis pulvinar tincidunt. Cras at consectetur mi.";

echo "<p>".substr($yazibuyuk,0,250)."....</p>";
echo "<a href=\"#\">Devamını Oku</a>";




?>