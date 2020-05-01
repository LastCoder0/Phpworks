<?php  require_once 'baglan.php';
?>
<html>
    <head>
        <title>crud düzenleme</title>

</head>
<body>
    <?php 
   $bilgilerimsor=$db ->prepare("select * from bilgilerim where bilgilerim_id=:id");
   $bilgilerimsor->execute(array(
      'id'=> $_GET['bilgilerim_id'] 

   ));
   $bilgicek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC);

    ?>
    <h1>Düzenleme</h1>
<?php
    if($_GET['durum']=="ok")
    {
        echo "Düzenleme yapıldı";
    }
?>
<form action="islem.php" method="POST">

<input type="text" name="bilgilerim_ad" value="<?php echo $bilgicek['bilgilerim_ad'] ?>" >
<input type="text" name="bilgilerim_soyad"  value="<?php echo $bilgicek['bilgilerim_soyad'] ?> ">
<input type="email" name="bilgilerim_mail"  value="<?php echo $bilgicek['bilgilerim_mail'] ?>" >
<input type="text" name="bilgilerim_yas" value="<?php echo $bilgicek['bilgilerim_yas'] ?> ">
<input type="hidden" value="<?php echo $bilgicek['bilgilerim_id']?>"  name="bilgilerim_id" >
 <button type="submit" name="güncelle">Formu Düzenle</button>
</form>


</body>
<html>