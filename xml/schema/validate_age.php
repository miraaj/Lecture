<?php
	$xml = new DOMDocument(); 
	$xml->load('./age_restrict.xml');
	 
	if (!$xml->schemaValidate('./age.xsd')) { 
	   echo "<p>invalid xml document<p/>";
	} 
	else { 
	   echo "<p>valid xml doxument<p/>"; 
	} 
?>