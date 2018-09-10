<?php
function garis ($n){
	if ($n >= 1) {
		kotak($n);
		echo "<br>";
		$n--;
		garis ($n);
	}
}
function kotak ($garis,$kotak =1){
	echo "*";
	$kotak++;
	if ($kotak <=$garis)
		kotak ($garis,$kotak);
	
}
function ganjil_genap ($nilai){
	$genap = array();
	$ganjil = array();
	for ($b=1; $b <$nilai ; $b++) { 
		if ($b % 2==0) 
			array_push($genap, $b);
		else
			array_push($ganjil, $b);
	}
	echo "genap  :";
	for ($a=1; $b <count($genap) ; $b++) { 
		echo $genap[$b];
		if ($b != count($genap)-1) {
			echo ", ";
		}
	}
	echo "<br>";
	echo "genap  :";
	for ($b=0; $b <count($ganjil) ; $b++) { 
		echo $ganjil[$b];
		if ($b != count($ganjil)-1) {
			echo ", ";
		}
	}
	echo "<br>";
	echo "<br>";
	echo "Jumlah deret Genap =". count($genap);
	echo "<br>";
	echo "Jumlah deret Ganjil =". count($ganjil);
}
if (isset($_GET ["submit"])) {

		$n = $_GET ["n"];
		garis($n);
		ganjil_genap($n);
}



?>
