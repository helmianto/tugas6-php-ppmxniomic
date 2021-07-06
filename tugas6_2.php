<?php
$jambu = 15000;
$kardus = 2000;
function totalPenjualan( $jambu, $kardus, $jumlah_kardus, $berat_jambu_didus){
    $total = $jumlah_kardus * $kardus + $jumlah_kardus * $berat_jambu_didus * $jambu;
    return $total;
}

echo "================================================ <br/>";
echo "Harga Jambu = Rp. ". $jambu ." / kg <br/>";
echo "Harga Kardus = Rp. ". $kardus ." / pcs <br/>";
echo "Total Penjualan (Dus dan Jambu) = Rp. ". totalPenjualan($jambu, $kardus, 6,5) ." <br/>";
echo "================================================ <br/>";

?>