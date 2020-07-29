<?php 
	
	//buat tampung angka buat nampung angka penjumlahan awal dan angka kedua
	function pasangan_terbesar($angka){
		$tampungan = 0;
		$pisaharr[] = str_split($angka,2);

		for ($i=0; $i<count($angka)-1; $i++) { 
			if($i===0){
				$tampungan = $pisaharr[$i] + $pisaharr[$i+1];
			}
			if($tampungan<$pisaharr[$i] + $pisaharr[$i+1]){
				$tampungan = $pisaharr[$i] + $pisaharr[$i+1];
			}
		}
		return $tampungan;
	}

	echo pasangan_terbesar(641573); // 736


?>