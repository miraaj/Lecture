<?php
	$xml = new DOMDocument(); 
	$xml->load('./simple_type.xml');
	 
	if (!$xml->schemaValidate('./simple.xsd')) { 
	   echo "<p>invalid xml document<p/>";
	} 
	else { 
	   echo "<p>valid xml doxument<p/>"; 
	} 
?>