<?php

function ubah_huruf($string){
	$shiftBy = 1;
	$alfabet = 'abcdefghijklmnopqrstuvwxyz';
	$alfabetbaru = substr($alfabet, $shiftBy).substr($alfabet, 0, $shiftBy);

	echo strtr($string, $alfabet, $alfabetbaru)."<br>";

}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>