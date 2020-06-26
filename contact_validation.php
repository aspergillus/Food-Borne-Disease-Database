<?php
$name = $email = $subject = $message = "";
$nameError = $emailError = $subjectError = $messageError = "";
$successMessage ="";

if($_SERVER["REQUEST_METHOD"] == "POST") { 
	if (empty($_POST["name"])){
		$nameError = "Name is required";
	}
	else
	{
		$name = test_input($_POST["name"]); // check name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$name))
		{
			$nameError = "Only letters and white space allowed";
		}
	} // Checking null values in the message.
	
	if (empty($_POST["email"]))
	{
		$emailError = "Email is required";
	}
	else
	{
		$email = test_input($_POST["email"]);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailError = "Invalid email format";
		}
	} // Checking null values in message.
	
	if (empty($_POST["subject"]) || empty(test_input($_POST["subject"])))
	{
		$subjectError = "Subject is required";
	}
	if (empty($_POST["message"]) || empty(test_input($_POST["message"])))
	{
		$messageError = "Message is required";
	}
	if ($nameError == '' && $emailError == '' && $subjectError == '' && $messageError == '') {
		echo '<script>window.alert("message sent successfully")</script>';
		if( !($name=='') && !($email=='') && !($subject=='') &&!($message=='') )
		{ // Checking valid email.
			if (preg_match("/([w-]+@[w-]+.[w-]+)/",$email))
			{
				$header= $name."<". $email .">";
				$headers = "FormGet.com"; /* Let's prepare the message for the e-mail */
				$msg = "Hello! $name Thank you...! For Contacting Us.
				Name: $name
				E-mail: $email
				subject: $subject
				Message: $message
				This is a Contact Confirmation mail. We Will contact You as soon as possible.";
				$msg1 = " $name Contacted Us. Hereis some information about $name.
				Name: $name
				E-mail: $email
				Subject: $subject
				Message: $message "; /* Send the message using mail() function */
				if(mail($email, $headers, $msg ) && mail("aspergillusg@gmail.com", $header, $msg1 ))
				{
					$successMessage = "Message sent successfully.......";
				}
			}
			else{
				$emailError = "Invalid Email";
			}
		}
	}
} // Function for filtering input values.function test_input($data)
function test_input($data){
	$data = trim($data);
	$data =stripslashes($data);
	$data =htmlspecialchars($data);
	return $data;
}
?>