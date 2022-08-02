<?php
$errors = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$myemail = 'info@digitalwebmark.com';//<-----Put Your email address here.
	if(empty($_POST['firstname'])  || empty($_POST['phone']) ||	empty($_POST['email']) ){
			$errors = "Error: You left a field empty";
	}
	else{
		$name = $_POST['firstname'];
		$email_address = $_POST['email'];
		$phone = $_POST['phone'];
	    $subject=$_POST['subject'];
		$message = $_POST['content'];
		 
		if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",$email_address))
		{
			$errors = "Error: Invalid email address";
		}

		if( empty($errors))
		{
    		$to = $myemail;
    		$email_subject = "Digital Web Mark\n";
    		$email_body = "Message From:\n". 
    		"Name: $name\nPhone: $phone\nSubject: $subject\n".
    		"Email: $email_address\nMessage: \n\n$message";
    		$headers = "From: $email_address \n";
    		$headers .= "Reply-To: $email_address";
    		if( mail($to,$subject,$email_body,$headers) )
    		{
    			$errors = "Your email has been sent...";
    		}
    		else
    		{
    			$errors = "Sorry, there has been an error!!";
    		}
	    }
	}
	echo $errors;
}
else{
echo "<h2>Access Denied</h2>";
}
?>