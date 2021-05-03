<?php
	$Harga1Pulpen = 1750;
	$JenisUangRian = 5000;
	$QtyUangRian = 5;
	$UangRian = $JenisUangRian*$QtyUangRian;
	$JumlahPulpen = 12;	
	$TotalHarga = $Harga1Pulpen*$JumlahPulpen;
	$kembalian = $UangRian-$TotalHarga;
	
	echo 'Diketahui : <br>a. Harga 1 Pulpen = '.$Harga1Pulpen;
	echo '</br>b. Rian membeli 1 lusin pulpen = '.$JumlahPulpen.' buah pulpen';
	echo '</br>c. '.$QtyUangRian.' lembar uang '.$JenisUangRian.' = '.$UangRian;	
	echo '</br></br>Ditanyakan : <br>Berapa uang kembalian yang Rian terima?';
	echo '</br></br>Jawab :</br>';
	echo $Harga1Pulpen.' x '.$JumlahPulpen.' = '.$TotalHarga.' (harga 1 lusin pulpen)';
	echo '</br>'.$UangRian.' - '.$TotalHarga.' = '.$kembalian;
	echo '</br></br>Uang kembalian yang Rian terima adalah Rp. '.$kembalian;
?>