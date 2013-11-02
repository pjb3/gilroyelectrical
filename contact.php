<? 

  if (isset($_POST['email'])) {

    //Send email
		$message = "Name: ".
		  $_POST['name'].
			"\nCompany: ".
			$_POST['company'].
			"\nEmail: ".
			$_POST['email'].
			"\nPhone Number: ".
			$_POST['phone'].
			"\n\nComment: ".
			$_POST['comment'];

		$headers = 'From: '.$_POST['email'];

		//error_log("Sending message: \n".$message);
		mail('gilroyelectrical@gmail.com', 'Contact Us', $message, $headers);

		//Redirect to Thank You page
		$host  = $_SERVER['HTTP_HOST'];
		header("Location: http://$host/index.html");
		exit;
	}
?>