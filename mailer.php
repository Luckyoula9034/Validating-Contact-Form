<?php

if (isset($_POST['email'])) {

    // Customize 3 entries below as needed
    $email_to = "EXAMPLE@EXAMPLE.COM";
    $email_subject = "CONTACT FORM EMAIL FOR EXAMPLE.COM";
    $source = "EXAMPLE@EXAMPLE.COM";

    function died($error)
    {
        // errors
        echo "Whoa there!, I'm sorry but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error . "<br /><br />";
        echo "This is really my fault for not implementing validation in JavaScript yet, but could you please go back and fix these errors?<br /><br />";
        die();
    }


    // validate form data has been entered

    if (!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['phone']) ||        
        !isset($_POST['comments']) ||
        !isset($_POST['is_human'])
    ) {
        died('I\'m are sorry, but there seems to be a problem');
    }

    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $phone = $_POST['phone']; // not required
    $comments = $_POST['comments']; // required
    $robot = $_POST['is_human']; //robot check

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    if (!preg_match($email_exp, $email_from)) {
        $error_message .= 'The email address you entered doesn\'t seem quite right.<br />';
    }
    $string_exp = "/^[A-Za-z .'-]+$/";
    if (!preg_match($string_exp, $name)) {
        $error_message .= 'Something seems to be off about your name.<br />';
    }
    if (strlen($comments) < 2) {
        $error_message .= 'Your comments don\'t appear to be valid.<br />';
    }
    if (strlen($robot) > 0) {
        $error_message .= 'You appear to be a robot. <br />';
    }
    if (strlen($error_message) > 0) {
        died($error_message);
    }
    $email_message = "Message from your contact form below.\n\n";
    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Name: " . clean_string($name) . "\n";
    $email_message .= "Email: " . clean_string($email_from) . "\n";
    $email_message .= "Telephone: " . clean_string($phone) . "\n";
    $email_message .= "Comments: " . clean_string($comments) . "\n";

// create some email headers
    $headers = 'From: ' . $source . "\r\n" .

//'Reply-To: '.$email_from."\r\n" .  if you turn this on Gmail seems to mark it as spam, use with caution

        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
    ?>
<!DOCTYPE html>
<html lang="en">

                    <h1>Thank You</h1>
        <h2>I will get back in touch with you soon!</h2>
<?php

}

?>