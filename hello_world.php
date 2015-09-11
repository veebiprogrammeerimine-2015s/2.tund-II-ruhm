<?php
	
	$first_name = "Romil";
	$last_name = "Rõbtšenkov";
	
	echo $first_name." ".$last_name;
	
?>

<br>

<?php
	
	$age = 3;
	
	// kui on väiksem kui 18, siis alaealine
	// kui on suurem siis täisealine
	if($age < 18) {
		//tõene
		echo "alaealine";
		
	} else {
		// väär
		echo "täisealine";
	}
	
?>

<br>

<?php

	// nii mitu korda trüki välja "palju ", kui palju on vanust
	
	for($i = 0; $i < $age; $i = $i + 1) {
		
		// see mida korratakse
		echo "palju".$i." ";
		
	}
	
	echo "õnne";

?>

