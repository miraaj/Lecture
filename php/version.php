<?php
	$version = (float)phpversionsion();
	if ($version > 7.0) {
	    echo "Greater than 7:".$version;
	} elseif ($version === 7.0) {
	    echo "Exact ". $version;
	} else {
	    echo "Less than 7:".$version;
	}
?>



