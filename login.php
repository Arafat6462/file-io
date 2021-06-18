<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Log-in</title>
</head>
<body>
	<h1>Log-in Form</h1>
 
	<?php

		fopen("date.txt", "r");

		$data = file_get_contents("data.txt");
		$dataOK = json_decode($data);
		// echo "hello";
		// echo $dtlsOK->Religion;
		// echo "hi";

		// echo $data."<br><br>";
		// echo "new : ".$dataOK;

		$userId = $dataOK->Username;
		$pass = $dataOK->Password;

		if($userId == $_POST['Username'] && $pass == $_POST['Password'])
		{
			header('Location: welcome.html');
			//exit;
		}
		else
		{
			$failed = "Log-in failed";
		}

		// foreach ($dtlsOK as $ok  )
		// {
		// 	echo "$ok->Religion";
		// 	echo "$ok->Firstname";
		// }



 	 	// $filepointer = fopen("data.txt", "r");

 	 	// if ($filepointer) 
 	 	// {
 	 	// 	 $content = fread($filepointer, filesize("data.txt"));
 	 	// 	 echo $content;
 	 	// 	 fclose($filepointer);
 	 	// }
	?>
	
	<form action="<?php echo htmlspecialchars(($_SERVER['PHP_SELF'])); ?>" method = "POST">
 	 
 		 
			<label for="Username">Username:</label>
			<input type="text" id="Username" name="Username" required><br>

			<label for="Password">Password:</label>
			<input type="Password" id="Password" name="Password" required><br>

 		<br>
		<input type="submit" value="Log-in">
		<span style="color: red"><?php echo $failed; ?></span>

		
	</form>
</body>
</html>