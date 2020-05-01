<?php  require_once 'baglan.php';
?>

<?php

if($_GET['bilgilerimsil']=="ok")
{
    $sil=$db->prepare("Delete from bilgilerim where bilgilerim_id=:id");
    $kontrol=$sil->execute(array(
      'id' => $_GET['bilgilerim_id']
    ));
}
if($kontrol)
{
    
     Header("Location:crud.php?durum=ok");
     exit;
}
else
{

    Header("Location:crud.php?durum=no");
    exit;
}


?>