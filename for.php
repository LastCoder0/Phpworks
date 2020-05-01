<html>
<head>
<meta charset="utf-8">

</head>

<body>
<?php
for($i=0;$i<10;$i++)
{
    echo $i."<br>";
}

?>
<?php
//il plakalarini select box'a atalım
?>

<select>
<?php 
for($i=1;$i<=10;$i){?>
<option><?php echo $i ?></option>
<?php }
?>


</select>
</body>

</html>