<?php
	$Jenis1UangSetyo = 10000;
	$QtyUangSetyoJenis1 = 3;
	$TotalUangSetyoJenis1 = $Jenis1UangSetyo*$QtyUangSetyoJenis1;
	
	$Jenis2UangSetyo = 5000;
	$QtyUangSetyoJenis2 = 4;
	$TotalUangSetyoJenis2 = $Jenis2UangSetyo*$QtyUangSetyoJenis2;
	
	$Jenis3UangSetyo = 20000;
	$QtyUangSetyoJenis3 = 5;
	$TotalUangSetyoJenis3 = $Jenis3UangSetyo*$QtyUangSetyoJenis3;
	
	$HargaMainan = 55000;
	$UangSetyo = $TotalUangSetyoJenis1+$TotalUangSetyoJenis2+$TotalUangSetyoJenis3;
	
	$Kembalian = $UangSetyo-$HargaMainan;
	
	echo 'Diketahui :</br>';
	echo $QtyUangSetyoJenis1.' lembar uang '.$Jenis1UangSetyo. ' = '.$TotalUangSetyoJenis1.'</br>';
	echo $QtyUangSetyoJenis2.' lembar uang '.$Jenis2UangSetyo. ' = '.$TotalUangSetyoJenis2.'</br>';
	echo $QtyUangSetyoJenis3.' lembar uang '.$Jenis3UangSetyo. ' = '.$TotalUangSetyoJenis3.'</br>';
	echo 'Harga mainan = '.$HargaMainan.'</br></br>';
	echo 'DItanyakan :</br> Jumlah uang Setyo setelah membeli mainan?</br></br>';
	echo 'Jawab :</br>';
	echo $TotalUangSetyoJenis1.' + '.$TotalUangSetyoJenis2.' + '.$TotalUangSetyoJenis3.' = '.$UangSetyo;
	echo ' (Jumlah uang Setyo sebelum membeli mainan)</br>';
	echo $UangSetyo.' - '.$HargaMainan.' = '.$Kembalian;
	echo ' (Jumlah uang Setyo setelah membeli mainan)</br></br>';
	echo 'Jumlah uang Setyo setelah membeli mainan adalah Rp. '.$Kembalian.'</br>';

?>