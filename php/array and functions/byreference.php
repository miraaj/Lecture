<?php 

	function change_score_ref(&$score){
			$score = $score + 20;
	}

	function change_score($score){
			$score = $score + 20;
	}
	$score = 40;
	echo "Score: $score<br>";
	change_score($score);
	echo "Score by without ref: $score<br>";
	change_score_ref($score);
	echo "Score by ref: $score<br>";
	
?>