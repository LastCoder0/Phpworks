<!DOCTYPE html>
<htmlZ>
<head>
<title>
</title>
<meta charset="utf-8">
</head>
<body>
<?php
//Post Ve Get Methodları
//post gizli get Gösterir verileri


if(isset($_POST['ad']))
{
    if(isset( $_POST['pass']))
    {
        echo "<p>Merhaba,".$_POST["ad"].$_POST["pass"]."</p>";
    }
}

?>
<form action="" method="get">
Ad <input type="text" name="ad" placeholder="E-mail Adresinizi Giriniz">
Sifre <input type="password" name="pass" placeholder="Sifrenizi Giriniz">
<input type="submit" value="Formu Gönder">

</form>
</body>
</htmlZ