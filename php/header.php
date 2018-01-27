<?php
	echo "Header Information<hr>";
	foreach(getallheaders() as $key=>$value)  {
    print $key.': '.$value."<br />";
	}
?>