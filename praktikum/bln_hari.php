<?php    
$blnhari = date("n"); 
switch($blnhari) { 
    case 1 : $bln = "Januari"; $jml=31;
    break; 
    case 2 : $bln = "Pebruari"; $jml=28;
    break; 
    case 3 : $bln = "Maret"; $jml=31;
    break; 
    case 4 : $bln = "April";$jml=30;
    break; 
    case 5 : $bln = "Mei";$jml=31;
    break; 
    case 6 : $bln = "Juni"; $jml=30;
    break; 
    case 7 : $bln = "Juli"; $jml=31;
    break; 
    case 8 : $bln = "Agustus"; $jml=31;
    break; 
    case 9 : $bln = "September";$jml =30;
    break; 
    case 10: $bln = "Oktober"; $jml=31;
    break; 
    case 11: $bln = "Nopember"; $jml=30;
    break; 
    case 12: $bln = "Desember";$jml=31;
    break; 
}
echo "Bulan $bln <br/>";
echo "Jumlah hari $jml";
?>