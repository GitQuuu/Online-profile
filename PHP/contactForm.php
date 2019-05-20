<?php
echo "Message content";
echo "<br>";
echo "<br>";
echo "Name: ". $_POST['Name'];
echo "<br>";
echo "Github name: ". $_POST['Github'];
echo "<br>";
echo "Email: ". $_POST['Email'];
echo "<br>";
echo "Phone number:". $_POST['Phone'];
echo "<br>";
echo "<br>";
echo "Message subject:". $_POST['Subject'];
echo "<br>";
echo "Your Message:". $_POST['Message'];

echo "<br>";
echo "<br>";

echo "You can close this page";

$to      = 'nobody@example.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

?>