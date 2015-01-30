<?php

if($_POST["submit"]){
    $recipient = "shardoolsingh4@gmail.com";
    $subject = "Message from form to email";
    $sender = $_POST["sender"];
    $senderEmail = $_POST["senderEmail"];
    $message = $_POST["message"];

    $mailBody = "
        Name: $sender\n
        Email: $senderEmail\n
        Message: $message
    ";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou ="<p>Thank You! Your message has been sent.</p>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form to Email</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="contact.css">
</head>
<body>

    <?=$thankYou ?>

    <form method="post" action="contact.php">
               <h1>Contact me</h1>
               <p class="elevator"><em>Please drop your name, email and a comment to fire off a message to me.</em><br>
               All fields are required.</p>
               <p></p>
                <label>I'm intrested in</label><br>
                <select>
                    <option value="1">just chatin'</option>
                    <option value="2">hiring you</option>
                    <option value="3">other</option>
                </select><br>

                <label>My name is</label><br>
                <input name="sender" type="text" placeholder="Drop your name here"><br>

                <label>My email is</label><br>
                <input name="senderEmail" type="email" placeholder="Drop your email here"><br>

                <label>Questions or Comments?</label><br>
                <textarea name="message" placeholder="Drop your message here" cols="30" rows="7"></textarea><br>
                <input name="submit" type="submit" value="Send" class="submit">
            </form>
</body>
</html>
