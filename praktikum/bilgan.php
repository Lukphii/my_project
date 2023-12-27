<?php
function jmlh_ganjil(){
    $jmlh = 0;
    for($i=10; $i<=123456; $i++){
        if ($i % 2 == 1) {
            $total = 1;
            $jmlh = $jmlh + $total;
        }
    }
    echo "Jumlah bilangan ganjil antara 10 sampai 123456 adalah $jmlh";
}
echo jmlh_ganjil();
?>