<?php
extract($_POST);       
$name = $_POST['name'];
$email = $_POST['email'];


					use PHPMailer\PHPMailer\PHPMailer;
					use PHPMailer\PHPMailer\Exception;

					require 'PHPMailer/src/Exception.php';
					require 'PHPMailer/src/PHPMailer.php';
					require 'PHPMailer/src/SMTP.php';



				//Create an instance; passing `true` enables exceptions
				$mail = new PHPMailer(true);

				try {
				    //Server settings
				  //  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
				    $mail->isSMTP();                                            //Send using SMTP
				    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
				    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
				    $mail->Username   = 'ingjordansolis@gmail.com';                     //SMTP username
				    $mail->Password   = 'dcqdfqhbrtynrzic';                               //SMTP password
				    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
				    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

				    //Recipients
				    $mail->setFrom('ingjordansolis@gmail.com', 'Mailer');
				    $mail->addAddress($email, $name);     //Add a recipient
			

				    //Attachments
				    $mail->addAttachment('img.jpg', 'new.jpg');    //Optional name

				    //Content
				    $mail->isHTML(true);                                  //Set email format to HTML
				    $mail->Subject = 'Here is the subject';
				    $mail->Body    = 'This '.$name. 'Email' .$email. ' message ' .$message. '  body <b>in bold!</b>';
				   

				    $mail->send();
				    echo 'Message has been sent';
				} catch (Exception $e) {
				    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
				}


?>