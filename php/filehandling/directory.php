<?php
	error_reporting(0);
	

	mkdir("mksssdir_make",777) or die ("Error creating directory");
	mkdir("rm_mkdir_make",777) or die ("Error creating directory");
	echo "Success creating directory";

	rmdir("rm_mkdir_make");
	echo "Success removing directory";

	echo getcwd();

	 chdir("C:\\xampp\htdocs\lecture\multiarray");
	 $cdir = getcwd();
	echo "<br>Changed dir :".$cdir;

	echo "<h2>scandir</h2><hr>";

	$file = scandir("C:\\xampp\htdocs\lecture\multiarray");
	print_r($file);


	echo "<h2>readdir</h2><hr>";

	$dir = opendir("C:\\xampp\htdocs\lecture\multiarray");

	while ($file_readdir = readdir($dir)) {
		echo "filename: $file_readdir <br>";
		# code...
	}
	


	

?>