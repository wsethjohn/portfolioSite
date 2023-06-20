<?php  

 function emailForm(){
    if( isset($_POST['submit'])) {

        //getting user data
        $firstName + $_POST['fullName'];
        $fromEmail = $_POST['email'];
        $phone = $_POST['number'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
    
        //Recipient email
        $mailTo = 'seth@1135films.com';
    
        //email subject
        $subject = ' A New Message Received From ' .$firstName;
    
        //email message body
        $htmlContent = '<h2> Email Request Received </h2>
        <p> <b>Client Name: </b> '.$firstName . "" . $lastName . '</p>
        <p> <b>Email: </b> '.$fromEmail .'</p>
        <p> <b>Phone Number: </b> '.$phone .'</p>
        <p> <b>subject: </b> '.$subject .'</p>';
    
        //header for sender info
        $headers = "From: " .$firstName . "<". $fromEmail . ">";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
        //PHP mailer function
       $result = mail($mailTo, $subject, $htmlContent, $headers);
    }
}
