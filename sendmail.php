<?php
if(!isset($_POST['submit'])){
	header("Location: index.php");
}
	require 'phpmailer/PHPMailerAutoload.php';
	$email_usuario = addslashes($_POST['email']);
	$nome_usuario = addslashes($_POST['nome']);
	$mensagem = addslashes(nl2br($_POST['mensagem']));
	$mail = new PHPMailer;

	//$mail->SMTPDebug = 3;                               // Enable verbose debug output
	$mail->setLanguage('br', 'phpmailer/language/');
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'exodoarteferro@gmail.com';                 // SMTP username
	$mail->Password = '';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->setFrom($email_usuario, $nome_usuario);
	$mail->addAddress('exodoarteferro@gmail.com');
	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'SITE';
	$mail->Body    = $mensagem;

	if(!$mail->send()) {
	    echo 'Messagem não foi enviada.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    echo 'Messagem enviada com sucesso!';
	}
?>