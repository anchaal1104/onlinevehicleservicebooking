<?php
$mailto=$email;
$mailsubject="Booking Details(updated)";
//$mailmsg=$_POST['msg']
$mailmsg='<h1><u>YOUR UPDATED BOOKING DETAILS</u></h1><br><b>DATE</b>:'.$row['tdate'].'<br><b>NAME</b>:'.$row['name'].'<br><b>CONTACT:</b>'.$row['contact'].'<br><b>ADDRESS:</b>'.$row['address'].'<br><b>PINCODE:</b>'.$row['pincode'].'<br><b>VEHICLE TYPE:</b>'.$row['vtype'].'wheeler <br><b>VEHICLE MODEL:</b>'.$row['vmodel'].'<br><b>VEHICLE REGISTRATION NUMBER:</b>'.$row['vregno'].'<br><b>VEHICLE SERVICE DETAILS:</b>'.$row['sdetails'].'<br><b>BOOKING DATE:</b>'.$row['bookdt'].'<br><b>BOOKING TIME:</b>'.$row['booktime'].'<br><b>COMMENTS:</b>'.$row['comments'].'<br><b>STATUS:</b>'.$row['status'].'<br><b>BOOKING NUMBER:</b>'.$row['bookingno'].'<br><b>SERVICE CENTRE NAME:</b>'.$scname.'<br><b>ADDRESS:</b>'.$saddress.'<br><b>PINCODE:</b>'.$spincode.'<br><b>GST NUMBER:</b>'.$gstno.'<br><b>SERVICE EMAIL:</b>'.$semail.'<br><b>CONTACT NUMBER:</b>'.$scontact.'<br><br><br><br><br><br><p>*This is a system generated output.</p>';

//$phototmpname=$_FILES['photo']['tmp_name'];
//$photoname=$_FILES['photo']['name'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
require'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);                              //Passing `true` enables exceptions
   //Server settings
 $mail->SMTPDebug = 0;                                 // Enable verbose debug output by value 2
 $mail->isSMTP();                                      // Set mailer to use SMTP
 $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
 $mail->SMTPAuth = true;                               // Enable SMTP authentication
 $mail->Username = 'anchaal11april@gmail.com';                 // SMTP username
 $mail->Password = '11april1999';                           // SMTP password
 $mail->SMTPSecure = 'tls'; //or ssl                           // Enable TLS encryption, `ssl` also accepted
 $mail->Port = 587;   // or 465                                 // TCP port to connect to

//Recipients
$mail->setFrom('anchaal11april@gmail.com', 'Bookings');
 
$mail->addAddress($mailto); 

// $addr = explode(',',$mailto);
// echo $ok=count($addr);

// foreach($addr as $address){
// $mail->AddAddress($address);

// }

//$mail->AddAttachment($phototmpname, $photoname);
    // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
// $mail->addReplyTo('info@example.com', 'Information');
 $mail->addCC('anchaal11april@gmail.com');
// $mail->addBCC('bcc@example.com');
 
//Attachments
// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
//Content
 $mail->isHTML(true);                                  // Set email format to HTML
 $mail->Subject = $mailsubject;
 $mail->Body    = $mailmsg;

 
if(!$mail->send())
{
	echo"mail not send";
	
}
else{
	header("location:show.php");
   
}


// if($i==$ok){

// }
?>









