<?php  require_once 'baglan.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Crud işlemleri</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>Veritabani pdo kayit islemleri</h1>
    <hr>
   <?php
   /*
   if($_GET['durum']=="ok")
   {
       echo "işlem başarılı";
   }
   else if($_GET['durum']=="no")
   {
       echo "İşlem Başarısız";
   }
   */
   ?>
    <form action="islem.php" method="POST">

       <input type="text" name="bilgilerim_ad" placeholder="Adınızı giriniz..." required>
       <input type="text" name="bilgilerim_soyad" placeholder="Soyadınızı giriniz..." required>
       <input type="email" name="bilgilerim_mail" placeholder="Mailiinizi giriniz giriniz..." required>
       <input type="text" name="bilgilerim_yas" placeholder="Yasini giriniz..." required>
        <button type="submit" name="insert">Formu gönder</button>
    </form>
    <hr>
    <h4>Kayıt Listeleme<h4>
        <hr>
        <?php
        /*
    $bilgilerimsor=$db->prepare("Select * from bilgilerim");
    $bilgilerimsor->execute();
     $bilgilerimcek=$bilgilerimsor ->fetch(PDO::FETCH_ASSOC);
     print_r($bilgilerimcek);
     echo "<pre>";
   echo  $bilgilerimcek['bilgilerim_ad'];
   echo $bilgilerimcek['bilgilerim_soyad'];

//select islemi
$bilgilerimsor=$db->prepare("Select * from bilgilerim");
    $bilgilerimsor->execute();
    while($bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC))
    {
        echo $bilgilerimcek['bilgilerim_ad'];
        echo "<br>";
    }
*/
        ?>

<table style="width:60%" border="1">
    <tr>
        <th>Sıra No</th>
    <th>ID</th>
    <th>Ad</th>
    <th>Soyad</th>
    <th>Mail</th>
    <th>Yaş</th>
    <th width="50">İşlemler</th>
    <th width="50">İşlemler</th>

</tr>
<?php
$bilgilerimsor=$db->prepare("Select * from bilgilerim");
    $bilgilerimsor->execute();
    $say=0;
    while($bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC)){ $say++; ?>
  
<tr>
    <td><?php echo $say ?></td>
    <td><?php echo $bilgilerimcek['bilgilerim_id']  ?></td>
    <td><?php echo $bilgilerimcek['bilgilerim_ad']  ?></td>
    <td><?php echo $bilgilerimcek['bilgilerim_soyad']  ?></td>
    <td><?php echo $bilgilerimcek['bilgilerim_mail']  ?></td>
    <td><?php echo $bilgilerimcek['bilgilerim_yas']  ?></td>
    <td align="center"><a href="duzenle.php?bilgilerim_id=<?php echo $bilgilerimcek['bilgilerim_id'] ?>">
        <button>Düzenle</button></td></a>

    <td align="center"><a href="sil.php?bilgilerim_id=<?php echo $bilgilerimcek['bilgilerim_id']?>&bilgilerimsil=ok "><button>Sil</button></td></a>
    </tr>

<?php } ?>

</table>
</body>



</html>
