<?php

 
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$conn = new mysqli('localhost','root','','juba');
if($conn->connect_error){die('connection failed :'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT INTO registration(name,email,phone,subject,message)
    values(?,?,?,?,?)");
    $stmt->bind_param("ssiss",$name,$email,$phone,$subject,$message);
    $stmt->execute();
    echo '
        <!DOCTYPE html>
        <html>
        <head>
            <title>Thank You</title>
        </head>
        <body>
            <div style="text-align: center; margin-top: 50px;">
                <h1>Thank You for Contacting Us!</h1>
                <p>We will get back to you as soon as possible.</p>
                <button onclick="history.back()" style="padding: 10px 20px; font-size: 16px; cursor: pointer;">Go Back</button>
            </div>
        </body>
        </html>';
    $stmt->close();
    $conn->close();
}
