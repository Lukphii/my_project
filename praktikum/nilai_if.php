<?php
$hari = 57;
if (($hari>=90)&&($hari<=100)){
    echo "Mata Kuliah : A (Baik Sekali)";
}else if (($hari>=76)&&($hari<=89)){
    echo "Mata Kuliah : B (Baik)";
}else if (($hari>=60)&&($hari<=75)){
    echo "Mata Kuliah : C (Cukup)";
}else if (($hari>=50)&&($hari<=59)){
    echo "Mata Kuliah : D (Hampir Cukup)";
} else if (($hari>=0)&&($hari<=49)){
    echo "Mata Kuliah : E (Kurang)";
}
?>