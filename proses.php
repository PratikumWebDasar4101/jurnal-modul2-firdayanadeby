<?php
function baris ($n){
	if ($n >= 1) {
		kolom($n);
		echo "<br>";
		$n--;
		baris ($n);
	}
}
function kolom ($baris,$kolom =1){
	echo "*";
	$kolom++;
	if ($kolom <=$baris)
		kolom ($baris,$kolom);
	
}
function genap_ganjil ($nilai){
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
	echo "Jumlah deret genap =". count($genap);
	echo "<br>";
	echo "Jumlah deret ganjil =". count($ganjil);
}
if (isset($_GET ["submit"])) {

		$n = $_GET ["n"];
		baris($n);
		genap_ganjil($n);
}



?>
