<?php 

	function palindrome_angka($angka){	

		if ($angka>=1 && $angka<=9) {
			return $angka=$angka+1;
		}else{
			while ((strrev($angka)===$angka)) {
				return$angka=$angka+1;
			}
		}

	}

	echo palindrome_angka(8)."<br>"; 
	echo palindrome_angka(10)."<br>";
	echo palindrome_angka(117)."<br>";
	echo palindrome_angka(175)."<br>";
	echo palindrome_angka(1000)."<br>";

?>