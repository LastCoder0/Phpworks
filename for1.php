<?php
for($i=0;$i<25;$i++)
{
    if($i%2==0)
    {
        echo $i;
        echo "<br>";
    }
}
$j=0;
while($j<3)
{
    echo "yazdiriliyor";
    echo "<br>";
    $j++;
}
$ornekdizi=array("elma","armut","muz");

foreach($ornekdizi as $meyve )
{
 echo $meyve; echo " ";

}

?>