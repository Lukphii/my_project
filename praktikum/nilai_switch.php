<?php
$hari = 78;
switch($hari){
    case (($hari>=90)&&($hari<=100)):
    echo "Mata Kuliah : A (Baik Sekali)";
    break;

    case (($hari>=76)&&($hari<=89)):
    echo "Mata Kuliah : B (Baik)";
    break;

    case (($hari>=50)&&($hari<=59)):
    echo "Mata Kuliah : D (Hampir Cukup)";
    break;

    case (($hari>=0)&&($hari<=49)):
    echo "Mata Kuliah : E (Kurang)";
    break;
}
?>