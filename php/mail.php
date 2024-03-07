<?php

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
	require './vendor/autoload1.php';

		error_reporting(0);
		ini_set('display_errors', 0);

		require_once 'php/conn.php';


					$vezeteknev = $_POST['vnev'];
					$keresztnev = $_POST['knev'];
					$ugyfelemail = $_POST['email'];
					$ugyfelemail2 = $_POST['email2'];
					$uzenet = $_POST['uzenet'];

    				$mail = 'adammihaly05@gmail.com';
    				$username = 'adammihaly05@gmail.com';

    				

				    $mail = new PHPMailer(true);
 
					        try {
					            //Enable verbose debug output
					            $mail->SMTPDebug = 0;//SMTP::DEBUG_SERVER;
					 
					            //Send using SMTP
					            $mail->isSMTP();
					 
					            //Set the SMTP server to send through
					            $mail->Host = 'smtp.gmail.com';
					 
					            //Enable SMTP authentication
					            $mail->SMTPAuth = true;
					 
					            //SMTP username
					            $mail->Username = 'mindenallathu@gmail.com';
					 
					            //SMTP password
					            $mail->Password = 'poqnskooqroptxnr';
					 
					            //Enable TLS encryption;
					            $mail->SMTPSecure = "tls";
					 
					            //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
					            $mail->Port = 587;
					 
					            //Recipients
					            $mail->setFrom('mindenallathu@gmail.com', 'mindenallat.hu');
					 
					            //Add a recipient
					            $mail->addAddress($mail, $username);
					 
					            //Set email format to HTML
					            $mail->isHTML(true);
					 
					            

					            $mail->Subject = 'Hirdetes torles';
					            $mail->Body    = '<p style="font-size: 26px;">Kedves ' . $username . '!</p><br><br> <p style="font-size: 20px;"> A mindenallat.hu oldalon a következő hirdetésed öt nap múlva törlésre kerül:</p><br><br><br><br>
					 <b style="font-size: 40px;">Hirdetés címe: ' . $hirdetescime . '</b> <br><br><br><br><br><br> 

					<i style="font-size: 18px;">Miért törlődik a hirdetés?<br>Minden hirdetés 30 napig lehet kint, ezt követően rendszerünk autómatikusan törli, annak érdekében, hogy az ne legyen elavult. Ezt az email-t követő hatodik napon belül törlődni fog rendszerünkből. Természetesen új hirdetést lehet kitenni a meglévő helyére. Amennyiben kérdésed van keresd fel ügyfélszolgálatunk.</i>
					 ';
					 
					            $mail->send();

					}
					catch (Exception $e) {
					            echo "<script type='text/javascript'>alert('Hiba lépett fel: $e')</script>";
					        }