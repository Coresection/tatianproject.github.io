<?php
if($_POST)
{
    $to_email       = "info@coresection.ch"; //Recipient email, Replace with own email here
    
    //check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        
        $output = json_encode(array( //create JSON data
            'type'=>'error', 
            'text' => 'Sorry Request must be Ajax POST'
        ));
        die($output); //exit script outputting json data
    } 
    
    //Sanitize input data using PHP filter_var().
    $user_name      = filter_var($_POST["user_name"], FILTER_SANITIZE_STRING);
    $user_email     = filter_var($_POST["user_email"], FILTER_SANITIZE_EMAIL);
    $date        = filter_var($_POST["date"], FILTER_SANITIZE_STRING);
    $seats        = filter_var($_POST["seats"], FILTER_SANITIZE_STRING);
    $subject = "Restaurant Reservation";

    //additional php validation
    if(strlen($user_name)<4){ // If length is less than 4 it will output JSON error.
        $output = json_encode(array('type'=>'error', 'text' => 'Name is too short or empty!'));
        die($output);
    }
    if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)){ //email validation
        $output = json_encode(array('type'=>'error', 'text' => 'Please enter a valid email!'));
        die($output);
    }
    if(strlen($date)<3){ //check emtpy subject
        $output = json_encode(array('type'=>'error', 'text' => 'Subject is required'));
        die($output);
    }
    if(strlen($seats)<1){ //check emtpy message
        $output = json_encode(array('type'=>'error', 'text' => 'Please enter estimated seats!'));
        die($output);
    }
    
    //email body
    $message_body = "Name: ".$user_name."\r\n"."Date of reservation: ".$date."\r\n"."Email: ".$user_email."\r\n"."Seats: ".$seats."\r\n";
    
    //proceed with PHP email.
    $headers = 'From: '.$user_email.'' . "\r\n" .
    'Reply-To: '.$user_email.'' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    $send_mail = mail($to_email, $subject, $message_body, $headers);
    
    if(!$send_mail)
    {
        //If mail couldn't be sent output error. Check your PHP email configuration (if it ever happens)
        $output = json_encode(array('type'=>'error', 'text' => 'Could not send mail!'));
        die($output);
    }else{
        $output = json_encode(array('type'=>'message', 'text' => 'Hi '.$user_name .'. Thank you for your reservation!'));
        die($output);
    }
}
?>