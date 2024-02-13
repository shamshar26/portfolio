<?php
$to = 'anandmpmtd@gmail.com';
if ($_POST) {
    $name = trim(stripslashes($_POST['name']));
    $email = trim(stripslashes($_POST['email']));
    $message = trim(stripslashes($_POST['message']));
    $subject = "Contact Form Submission";
    
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $mail = mail($to, $subject, $message, $headers);

    if ($mail) {
        echo "OK";
    } else {
        echo "Something went wrong. Please try again.";
    }
}
?>
