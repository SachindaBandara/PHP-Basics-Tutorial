<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Contact Form</title>
</head>

<body>
    <main>
        <form class="contact-form" action="include/mailer.inc.php" method="post">
        <p>Contact Form</p>
        <input type="text" name="fullname" placeholder="Enter Your Full name"><br>
        <input type="text" name="email" placeholder="Enter Your Email"><br>
        <input type="text" name="subject" placeholder="Enter Your Subject"><br>
        <textarea name="message" cols="30" rows="10" placeholder="Enter Your Message..."></textarea><br>
        <input type="submit" name="submit" value="Send">
        </form>
       <div>
        <?php
        if(isset($_GET["mailsend"])){
            if($_GET["mailsend"] === "succeded"){
                echo "<p style='text-align: center; background-color: green; margin-top: 5px;'>Successfully Send!</p>";
            }elseif($_GET["mailsend"] === "failed"){
                echo "<p style='text-align: center; background-color: red; margin-top: 5px;'>Can not send!</p>";
            }
        }
        ?>
       </div>
    </main>

</body>
</html>
