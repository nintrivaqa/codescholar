<?php
require_once 'vendor/autoload.php';
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$year_admission=$_POST['year_admission'];
$branch=$_POST['branch'];
$qualification=$_POST['qualification'];
$experience=$_POST['experience'];


$transport = (new Swift_SmtpTransport('smtp.googlemail.com', 587, 'tls'))
->setUsername('qa.nintriva@gmail.com')
->setPassword('nintriva123456');

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$body = 'First Name :'.$first_name.'<br/>'.'Last Name:'.$last_name.'<br/>'.' Phone :'.$phone.'<br/>'.'Email :'.$email.'<br/>'. 'Qualification:'.$qualification.'<br/>'.'Branch:'.$branch.'<br/>'.'Year of Passout:'.$year_admission.'<br/>'.' Experience:'.$experience;


$message = (new Swift_Message('Email From Codescholar'))
->setFrom(['Codescholar@gmail.com' => 'Codescholar'])
->setTo(['qa.nintriva@gmail.com'])
->setBody($body)
->setContentType('text/html')
;

// Send the message
$mailer->send($message);

echo 'Success';
return 'success';
?>