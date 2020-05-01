<?php

//Fonksiyonlar Nedir?
$ad="Cihat";
echo strlen($ad);
function ilkfonksiyon()
{
    echo "ilk fonk";
}
function hello($merhaba)
{
    echo "<br>";
    echo "Hoşgeldiniz".$merhaba."Sitemizde güvenli bir şekilde alışveriş yapabilirsiniz.";
}
$isim="Cihat";
global $b;
ilkfonksiyon();
hello($isim);
//Recursive fonksiyonlar
$sabit=1;
function fak($a)
{
    global $sabit;
    if($a>1)
    {
        $sabit=$sabit*$a;
        $a--;
        fak($a);
    }
    return $sabit;

}
echo "<br>";
echo fak(11);
echo "<br>";

//function  varmı yokmu
if(function_exists("fak"))
{
echo "faktoriyel adinda bir fonk var";
}
else
{
    echo "Fak yoktur.";
}

$butunfonk=get_defined_functions();
print_r($butunfonk);


?>