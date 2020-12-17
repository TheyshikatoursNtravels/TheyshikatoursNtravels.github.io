<?php
$pickup=$_POST["pickup"];
$return=$_POST["return"];
$date=$_POST["date"];
$rdate=$_POST["rdate"];
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
// $rdate=$_POST["rdate"];
// echo $pickup;
// echo $return;
// echo $rdate;
// echo $name;
// echo $email;
// echo $phone;

require 'phpmailer/PHPMailerAutoload.php';
    $mail =  new PHPMailer;
    $mail->isSMTP();

	$mail->Host='smtp.gmail.com';
	$mail->Port=587;
	$mail->SMTPAuth=true;
	$mail->SMTPSecure='tls';

	$mail->Username='theyshikatoursntravels@gmail.com';
	$mail->Password='Theyshika@1234';

	$mail->setFrom($email);
	$mail->addAddress('theyshikatoursntravels@gmail.com','AnnaPradokshana Charitable Trust'); 
	$mail->addReplyTo('theyshikatoursntravels@gmail.com');

	$mail->isHTML(true);
    $mail->Subject='AnnaPradokshana Charitable Trust';
	$mail->Body= "NAME:  ".$name."<br>"."EMAIL:  ".$email."<br>"."PHONE:  ".$phone."<br>"."Pick-Up-Location:  ".$pickup."<br>"."Return-Location:  ".$return."<br>"."Pick-Up-Date:  ".$date."<br>"."Return-Date:  ".$rdate;
	if(!$mail->send()){
     
    }else{
       
    }


	//customer reply mail

	
    $mail =  new PHPMailer;
    $mail->isSMTP();

	$mail->Host='smtp.gmail.com';
	$mail->Port=587;
	$mail->SMTPAuth=true;
	$mail->SMTPSecure='tls';

	$mail->Username='theyshikatoursNtravels@gmail.com';
	$mail->Password='Theyshika@1234';
	
	

	$mail->setFrom('theyshikatoursNtravels@gmail.com','Theyshika Tours & Travels',$name." from: ".$email);
	$mail->addAddress($email); 
	$mail->addReplyTo('theyshikatoursNtravels@gmail.com');

	$mail->isHTML(true);
    $mail->Subject='Theyshika Tours & Travels';
	$mail->Body= "Thank You for booking on THEYSHIYA TOURS & TRAVELS....we will call you in few minutes ".$name;
	if(!$mail->send()){
		// echo "Successfully mail send";
    }else{
        // echo "Successfully mail not send";
	}
	
// $fp=fopen("candidate.csv","a+");

// fputcsv($fp,array($name,$phone,$email,$address,$file));
// fclose($fp);

?>

<script>
         setTimeout(function(){
            window.location.href = 'http://localhost/car/';
         }, 1000);
      </script>

    
