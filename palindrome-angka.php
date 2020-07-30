<?php 
	
	function palindrome ($string){
		$output = false;
		if(strrev($string) == $string){
			$output = true;
		}
		return $output;
	}

	function palindrome_angka($angka){	
		$balik = (strrev($angka));
		if ($angka>=1 && $angka<=8) {
			return $angka+1;
		}
		if (palindrome($angka)){
			$angka++;
		}
		while (palindrome($angka)==false) {
			$angka++;
		}
		return $angka;

	}

	echo palindrome_angka(8)."<br>"; 
	echo palindrome_angka(10)."<br>";
	echo palindrome_angka(117)."<br>";
	echo palindrome_angka(175)."<br>";
	echo palindrome_angka(1000)."<br>";

?>