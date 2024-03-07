<?php

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
	require '../vendor/autoload1.php';

		error_reporting(E_ALL);
		ini_set('display_errors', 1);


					$vezeteknev = $_POST['vnev'];
					$keresztnev = $_POST['knev'];
					$ugyfelemail = $_POST['email'];
					$ugyfelemail2 = $_POST['email2'];
					$uzenet = $_POST['uzenet'];

					if ($ugyfelemail2 != 'a') {
						header("Location: https://codeefyit.com");
						exit();
					}

    				$email = 'adammihaly05@gmail.com';
    				$name = 'Codeefy';

    				

						if (!filter_var($ugyfelemail, FILTER_VALIDATE_EMAIL)) {
					        header("Location: https://codeefyit.com");
							exit();
					    }


							$mail = new PHPMailer(true);
					 
					        try {
					            
					            $mail->SMTPDebug = 0;
					            $mail->isSMTP();
					            $mail->Host = 'mail.nethely.hu';
					            $mail->SMTPAuth = true;
					            $mail->Username = 'system@codeefyit.com';
					            $mail->Password = 'CodITfee0025';
					            $mail->SMTPSecure = "tls";
					            $mail->Port = 1025;
					            $mail->setFrom('system@codeefyit.com', 'CodeefyIT.com');
					            $mail->addAddress($email, $name);
					            $mail->isHTML(true);       

					            $mail->Subject = 'New mail from Codeefy';
					            $mail->Body    = '

					            <h1 style="text-align: center;">Új üzenet érkezett a Codeefy weboldalról</h1>
					            <p>
					            Ügyfél neve: ' . $vezeteknev . ' '. $keresztnev .' <br>
					            Ügyfél email címe: ' . $ugyfelemail . ' <br>
					            Üzenet:<br>
					            ' . $uzenet . '
					            </p><br>
					            <p style="font-size: 90%; text-align: center;">A rendszert készítette és üzemelteti a Codeefy | <a href="https://codeefyit.com">CodeefyIT.com</a> - 2024</p>

					            ';
					 
					            $mail->send();

					                header("Location: https://codeefyit.com");
					                exit();

					}
					catch (Exception $e) {
					            echo "<script type='text/javascript'>alert('Hiba lépett fel: $e')</script>";
					}