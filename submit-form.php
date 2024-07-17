<?php

$fullname = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$mailheader = "from:" .$name. "<" .$email. ">\r\n";

$recipient = "makuacjohnclement487@gmail.com";

mail($recipient, $subject,$message,$mailheader)
or die("Error!!");

echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container2">
        <h2>Thank You for contacting us . we will get back to you as soon as posible</h2>
        <p class="back">Go back to the <a class="back2" href="index.html">Homepage </a> </p>
       
    </div>
</body>
</html>
';



?>>