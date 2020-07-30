<?php 

	function pasangan_terbesar($angka){
		$angkaterbesar = substr($angka, 0, 2);
		for ($i=0; $i<strlen($angka); $i++){ 
			$pasangan = substr($angka, $i, 2);
			if ($pasangan > $angkaterbesar) {
				$angkaterbesar = $pasangan;
			}
		}
		return $angkaterbesar;
	}

	echo pasangan_terbesar(641573); // 736*/
	echo pasangan_terbesar(12783456); // 83
	echo pasangan_terbesar(910233); // 91
	echo pasangan_terbesar(71856421); // 85
	echo pasangan_terbesar(79918293); // 99

?>