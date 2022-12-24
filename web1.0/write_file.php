<?php
	              
	if(isset($_POST['comment']))
	{
		$name=$_POST['name'];
		$comment=$_POST['comment'];
		$email=$_POST['email'];
		
		$fp = fopen($file_name, 'a');
	
		fwrite($fp, "Name: " . $name. "\n" . "Comment: " . $comment . "\n" .  "E-mail: " . $email . "\n" . "<br>");
		fclose($fp);
	}
	?>