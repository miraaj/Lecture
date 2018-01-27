<?php 

	$numeric = ['black','blue','red'];

	echo "Numeric array<br>";
	print_r($numeric);

	$Associative = ['black'=>'pen','blue'=>'sky','red'=>'blood'];

	echo "Associative array<br>";
	print_r($Associative);

	echo "<hr>Multi<br>";

	$multi = array(
		0 =>array('sue','natasha'),
		1 =>array('nicole','james','amber')
	);

print_r($multi);


echo "<ol>";
foreach ($multi as $keytop => $value) {

	foreach ($multi[$keytop] as $key => $value) {
			echo "<li>";
			echo $value;
			echo "</li>";
		}	


}
echo "</ol>";

	
?>