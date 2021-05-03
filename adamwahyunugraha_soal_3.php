<?php
	$U1 = 10000;
	$U68 = 30100;
	$n = 68;
   
	$a = $U68-$U1;
	$b = $a/67;

	$sukuKe = 81;
	echo '<b>Mencari barisan aritmatika suku ke 81 dengan</br></br></b>';
	echo 'Diketahui :</br>';
	echo 'Un1 = U1 = '.$U1.'</br>';
	echo 'Un2 = U68 = '.$U68.'</br></br>';
	echo 'Ditanyakan :</br> U81 = ?</br></br>';
	echo 'Jawab :</br> 1. Mencari nilai beda(b) :</br>';
	echo 'U68 - U1 = ('.$n.' - 1)b</br>';
	echo  $U68.' - '.$U1.' = '.($n - 1).'b</br>';
	echo $a.' = '.($n - 1).'b</br>';
	echo 'b = '.$a.' / '.($n - 1).' = '.$b.'</br></br>';
	echo '2. Mencari suku ke 81 :</br>';
	for ($i=1; $i <= $sukuKe; $i++) {
	echo 'suku ke : '.$i.' = '.$U1.'  '.'';
		$U1 = $U1 + $b;		
    }
?>