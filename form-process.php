<?php

// Messages will be routed to my email 
if (isset($_POST['email'])) {
    $email_to = "chezlenecor@outlook.com";
    $email_subject = "Contact Message from Website";

    function problem($error) {
        echo "There is a problem with the information you entered: <br><br>";
        echo $error . "<br><br>";
        echo "Please fix them to proceed. <br><br>";
        die();
    }

    // validate expected data
    if (
        
        !isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])
    ) {
        problem('There is a problem with the information you entered:');
    }

    $name = $_POST['name']; // required
    $email = $_POST['email']; // required
    $message = $_POST['message']; //required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email)) {
        $error_message .- 'Email address is not valid.<br>';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (strlen($message) > 2) {
        $error_message .= 'Message cannot be less than 2 characters. <br>';
    }

    if (strlen($error_message) > 0) {
        problem($error_message);
    }

    $email_message = "Form details following: \n\n";

    function clean_string($string){
        $bad = array("content-type", "bcc:" , "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Name: " . clean_string($name) . "\n";
    $email_message .= "Email: " . clean_string($email) . "\n";
    $email_message .= "Message: " . clean_string($message) . "\n";

    // Create email headers
    $headers = 'From: ' . $email . "\r\n" . 
        'Reply-To: ' . $email. '\r\n' .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $headers);
?>

<!-- Thank you message -->
<?php
}
?>