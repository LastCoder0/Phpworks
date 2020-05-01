<!DOCTYPE html>
<html>
<head>
<title>
</title>
<meta charset="utf-8">
</head>
<body>
<?php
$dizi=array("a","b","c");
$dizisayi=array(1,2,3,4);

print_r($dizi);
echo "<pre>";
echo $dizisayi[0];

rsort($dizi);
print_r($dizi);
//in array
echo  $sonuc=in_array("d",$dizi);
if($sonuc)
{
  echo "var";
}
else
{
    echo "yok";
}
//implode dizi degelerini birleştirmeye yarar.
$diziler=array("a","b","c","d");
echo "<br>";
echo implode("+",$diziler);
//explode bir degiskeni parçalayarak dizi aline getirir.
$zaman="27-10-2017 19:08";

$sonuc=explode("  ",$zaman);
echo "<pre>";

echo $sonuc[0];
echo "<br>";
echo date("d-m-y h:i:s");

?>




<br><br<br>
<br><br><br>
</body>
</html>