<?php
require_once 'baglan.php';

if(isset($_POST['güncelle']))
{
$bilgilerim_id=$_POST['bilgilerim_id'];

 $kaydet=$db->prepare("update  bilgilerim set 
      bilgilerim_ad=:bilgilerim_ad,
      bilgilerim_soyad=:bilgilerim_soyad,
      bilgilerim_mail=:bilgilerim_mail,
      bilgilerim_yas=:bilgilerim_yas
      where bilgilerim_id={$_POST['bilgilerim_id']}
 ");
$update =$kaydet ->execute(array(
   'bilgilerim_ad' => $_POST['bilgilerim_ad'],
   'bilgilerim_soyad' => $_POST['bilgilerim_soyad'],
   'bilgilerim_mail' => $_POST['bilgilerim_mail'],
   'bilgilerim_yas' => $_POST['bilgilerim_yas']
));
}
/*
if(isset($_POST['insert']))
{


 $kaydet=$db->prepare("insert into bilgilerim set 
      bilgilerim_ad=:bilgilerim_ad,
      bilgilerim_soyad=:bilgilerim_soyad,
      bilgilerim_mail=:bilgilerim_mail,
      bilgilerim_yas=:bilgilerim_yas
 ");
$insert =$kaydet ->execute(array(
   'bilgilerim_ad' => $_POST['bilgilerim_ad'],
   'bilgilerim_soyad' => $_POST['bilgilerim_soyad'],
   'bilgilerim_mail' => $_POST['bilgilerim_mail'],
   'bilgilerim_yas' => $_POST['bilgilerim_yas']
));
*/
if($update)
{
    
     Header("Location:duzenle.php?durum=ok&bilgilerim_id=$bilgilerim_id");
     exit;
}
else
{

    Header("Location:duzenle.php?durum=no");
    exit;
}




?>