<?php
	  $file = fopen($file_name, "r");
	  
	  while(!feof($file)) {
	        $line = fgets($file);
	        echo $line."<br>";
	    }
	    fclose($file);
	
	?>