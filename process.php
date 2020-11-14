<?php
if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
{
$to      = 'info@septimiussecurity.com';
$from    = 'info@septimiussecurity.com';
$email   = $_POST['email'];
$subject = 'Received New Email';
$message = "Name: ".$_POST['name']."\nPhone: ".$_POST['phone']."\nEmail: ".$_POST['email']."\nSubject: ".$_POST['subject']."\nMessage: ".$_POST['message']."";
$headers = 'From: '.$from."\r\n" .
        'Reply-To: '.$email."\r\n" .
        'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers))
{
	echo'
	<script>
	swal("Thank you", "Message has been sent!", "success");
	</script>
	';
	echo'<script>$("#reset")[0].reset()</script>';
}else
{
	echo'
	<script>
	swal("Error", "Email not send!", "info");
	</script>
	';
}
}else{
	echo'
	<script>
	swal("Pay attention", "Enter Valid email!", "info");
	</script>
	';
}
?>