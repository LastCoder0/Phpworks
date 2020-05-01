<html>
<body>
<?php

if(isset($_POST['notislem']))
{
    $gelendeger=$_POST['notislem'];
   echo "girmis oldugunuz deger:".$gelendeger;

}

?>
<form action="" method="post">
Notunuzu Giriniz <input type="number" name="notislem">
<input type="submit" value="Sonuc">
</form>
</body>
</html>