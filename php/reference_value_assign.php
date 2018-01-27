<?php

		$name = "Web Technology";
		$byReference = &$name;
		//$byRef_Error = &(1+2);
		$withoutRef = $name;

		printf("Without reference %s",$withoutRef);

		printf("<br>With  reference %s",$byReference);

?>