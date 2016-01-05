<?php

    //include_once("Mail.php"); 
    //If the form is submitted
	
    header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Email sent!'
	);

    $name = @trim(stripslashes($_POST['name'])); 
    $add_names = @trim(stripslashes($_POST['add_names'])); 
    $number = @trim(stripslashes($_POST['number'])); 
    $propaddress = @trim(stripslashes($_POST['propaddress'])); 
    $ass_acct = @trim(stripslashes($_POST['ass_acct'])); 
    $sp_attr = @trim(stripslashes($_POST['sp_attr'])); 
    $improv = @trim(stripslashes($_POST['improv'])); 
    $restrict = @trim(stripslashes($_POST['restrict'])); 
    $ease = @trim(stripslashes($_POST['ease'])); 
    $prior = @trim(stripslashes($_POST['prior'])); 
    $money = @trim(stripslashes($_POST['money'])); 
    $gifts = @trim(stripslashes($_POST['gifts'])); 
    $consier = @trim(stripslashes($_POST['consier'])); 

    $email_from = 'submit@cityofcharleston.org';
   // $email_to = 'kharrison@bowlesrice.com';
    $email_to = 'landtrust@cityofcharleston.org';
    $subject = 'Land Trust Online Form Submission';
    $body = "Name:  $name
                \n\nAdditional Names: $add_names
                \n\nPhone Number: $number
                \n\nAddress: $mail
                \n\nProperty Address: $propaddress
                \n\nAssessor's Account: $ass_acct
                \n\nSpecial Attributes: $sp_attr
                \n\nImprovements: $improv
                \n\nRestrictions: $restrict
                \n\nEasements: $ease
                \n\nPrior Restrictions: $prior
                \n\nMoney: $money
                \n\nOther Gifts: $gifts
                \n\nOther Considerations: $consier";

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;




    ?>