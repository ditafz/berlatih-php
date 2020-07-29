<?php 

function papan_catur ($angka){

	for ($i=1; $i<=$angka; $i++) { 
		for ($j=1; $j<=($angka*2) ; $j++) { 
			if ($i%2==1) {
				if($j%2==1){
					echo "#";	
				}else{
					echo "&nbsp &nbsp";
				}
				
			}else{
				if($j%2==1){
					echo "&nbsp &nbsp";	
				}else{
					echo "#";
				}
			}
		}
		echo "<br>";
	}

}

papan_catur(8);
echo "<br>";
papan_catur(5);

 ?>