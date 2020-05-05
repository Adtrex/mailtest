<?php session_start();

$errorCount = 0;
$first_name = $_POST["first_name"] != "" ? $_POST['first_name'] : $errorCount++;
$last_name = $_POST["last_name"] != "" ? $_POST['last_name'] : $errorCount++;
$email = $_POST["email"] != "" ? $_POST['email'] : $errorCount++;
$message = $_POST["message"] != "" ? $_POST['message'] : $errorCount++;

$_SESSION["first_name"] = $first_name;
$_SESSION["last_name"] = $last_name;
$_SESSION["email"] = $email;

if ($errorCount > 0) {
	//Display proper messages to the user
	//Give more accurate feedback to the user
	 $_SESSION["error"] = "You have " . $errorCount . " errors in your form submission";
	 header("Location: index.php");
}else{

$subject = "Message From Profile";
			$headers = "From: no-reply@snh.org" . "\r\n" . 
			"CC: tolu@snh.org";
	 

			$try = mail($email,$subject,$message,$headers);
		}

		if($try){
				$_SESSION["message"] = "Email sent to " . $email;
	 header("Location: index.php");

			}else{
				$_SESSION["error"] = "Something went wrong we could not send mail to " . $email;
	 header("Location: index.php");

			}

?>