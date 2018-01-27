<?php
	$xml = new DOMDocument(); 
	$xml->load('./restrict_simple.xml');
	 
	if (!$xml->schemaValidate('./restrict.xsd')) { 
	   echo "<p>invalid xml document<p/>";
	} 
	else { 
	   echo "<p>valid xml doxument<p/>"; 
	} 
?>