<?php
	$xml = new DOMDocument(); 
	$xml->load('./regex.xml');
	 
	if (!$xml->schemaValidate('./regex.xsd')) { 
	   echo "<p>invalid xml document<p/>";
	} 
	else { 
	   echo "<p>valid xml doxument<p/>"; 
	} 
?>