<?php

    //include_once("Mail.php"); 
    //If the form is submitted
	
    header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Email sent!'
	);

    $name = @trim(stripslashes($_POST['name'])); 
    $number = @trim(stripslashes($_POST['number'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $message = @trim(stripslashes($_POST['message'])); 
    $subject = 'Land Trust Contact Submission';
    $email_from = $email;
    $email_to = 'landtrust@cityofcharleston.org';
    //$email_to = 'luis.marstiller@cityofcharleston.org';

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $number . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;




    ?>