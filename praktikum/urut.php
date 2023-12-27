<?php
$handphone = array("Apple", "Samsung", "Vivo", "Oppo", "Nokia", "Asus", "Xiaomi", "Realme", "One Plus", "Google Pixel");
echo "Awal :<br />";
foreach($handphone as $hp => $merk){
    echo "$hp: $merk"."<br />";
}
sort ($handphone);
echo "<br/>Sort :<br />";
foreach ($handphone as $hp => $merk){
    echo "$hp: $merk"."<br />";
}
rsort ($handphone);
echo "<br/>Rsort :<br />";
foreach ($handphone as $hp => $merk){
    echo "$hp: $merk"."<br />";
}
asort ($handphone);
echo "<br/>Asort :<br />";
foreach ($handphone as $hp => $merk){
    echo "$hp: $merk"."<br />";
}
arsort ($handphone);
echo "<br/>Arsort :<br />";
foreach ($handphone as $hp => $merk){
    echo "$hp: $merk"."<br />";
}
ksort ($handphone);
echo "<br/>Ksort :<br />";
foreach ($handphone as $hp => $merk){
    echo "$hp: $merk"."<br />";
}
krsort ($handphone);
echo "<br/>Krsort :<br />";
foreach ($handphone as $hp => $merk){
    echo "$hp: $merk"."<br />";
}
?>