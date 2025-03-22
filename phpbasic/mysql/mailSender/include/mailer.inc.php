<?php
if(isset($_POST["submit"])){
    $name = $_POST["fullname"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // To
    $recipient = "sachindaudeni99@gmail.com";

    // Email Body
    $email_content = $subject."\n\nYou have recivied an email from ".$name."(".$email.").\n\n".$message;

    // From
    $email_header = "From: sachindaudeni192@gamil.com";

    if(mail($recipient, $subject, $email_content, $email_header)){
        header("Location: ../index.php?mailsend=succeeded");
    }else{
        header("Location: ../index.php?mailsend=failed");
    }
}

?>