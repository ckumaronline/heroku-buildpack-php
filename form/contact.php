<?
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$query = $_POST['query'];

	if (empty($_POST["name"])) {
		echo '<h2 style="font-family: \'Open Sans\', sans-serif; text-align: center">Name Is Required</h2>';
		echo '<p style="font-family: \'Open Sans\', sans-serif; text-align: center"><a href="../index.php">Go Back</a></p>';
	} else {
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			echo '<h2 style="font-family: \'Open Sans\', sans-serif; text-align: center">Invalid Name</h2>';
			echo '<p style="font-family: \'Open Sans\', sans-serif; text-align: center"><a href="../index.php">Go Back</a></p>';
		} else {
			if (empty($_POST["email"])) {
				echo '<h2 style="font-family: \'Open Sans\', sans-serif; text-align: center">Email Is Required</h2>';
				echo '<p style="font-family: \'Open Sans\', sans-serif; text-align: center"><a href="../index.php">Go Back</a></p>';
			} else {
				// check if e-mail address is well-formed
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					echo '<h2 style="font-family: \'Open Sans\', sans-serif; text-align: center">Invalid Email Format</h2>';
					echo '<p style="font-family: \'Open Sans\', sans-serif; text-align: center"><a href="../index.php">Go Back</a></p>';
				} else {
					if (empty($_POST["query"])) {
						echo '<h2 style="font-family: \'Open Sans\', sans-serif; text-align: center">Your Query Is Required</h2>';
						echo '<p style="font-family: \'Open Sans\', sans-serif; text-align: center"><a href="../index.php">Go Back</a></p>';
					} else {
						echo '<h2 style="font-family: \'Open Sans\', sans-serif; text-align: center">Thank You For Contacting Us! We Will Get In Touch With You As Soon As Possible</h2>';
						echo '<p style="font-family: \'Open Sans\', sans-serif; text-align: center"><a href="../index.php">Go Back</a></p>';
					}
				}
			}
		}
	}
?>