<?php

	require './bibliotecas/PHPMailer/Exception.php';
	require './bibliotecas/PHPMailer/OAuth.php';
	require './bibliotecas/PHPMailer/PHPMailer.php';
	require './bibliotecas/PHPMailer/POP3.php';
	require './bibliotecas/PHPMailer/SMTP.php';

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
	
	// print_r($_POST);

	class Mensagem {

		private $para = null;
		private $assunto = null;
		private $mensagem = null;

		public function __get($atributo) {
			return $this->$atributo;
		}

		public function __set($atributo, $valor) {
			$this->$atributo = $valor;
		}

		public function mensagemValida() {
			if(empty($this->para) || empty($this->assunto) || empty($this->mensagem)) {
				return false;
			}

			return true;
		}

	}

	$mensagem = new Mensagem();

	// Atribuindo valores para $mensagem via dados recebidos pelo método POST:
	$mensagem->__set('para', $_POST['para']);
	$mensagem->__set('assunto', $_POST['assunto']);
	$mensagem->__set('mensagem', $_POST['mensagem']);

	// Caso a mensagem não seja válida, irá entrar no bloco if
	if(!$mensagem->mensagemValida()) {
		echo "Mensagem não é válida";

		// Usando função nativa do php que faz com que a aplicação morra:
		die();
	}

	// -------------------------------------- PHPMailer lib ---------------------------------------------- //
	$mail = new PHPMailer(true);

	try {
		// Acentuações
		$mail->CharSet = 'UTF-8';
		$mail->Encoding = 'base64';

	    //Server settings
	    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
	    $mail->isSMTP();                                            //Send using SMTP

	    ## Informe aqui qual o servidor smtp(ex: Gmail, Outlook etc.)
	    $mail->Host       = 'smtp.gmail.com';                     	//Set the SMTP server to send through
	    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication

	    ## Coloque nas duas linhas a seguir seu email e senha:
	    $mail->Username   = 'email@teste';            //SMTP username
	    $mail->Password   = 'senha_teste';                       //SMTP password
	    $mail->SMTPSecure = 'tls';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
	    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

	    //Recipients
	    ## Aqui informamos o remetente
	    $mail->setFrom('email@teste');

	    ## Aqui informamos o destinatário
	    $mail->addAddress($mensagem->__get('para'));   				//Add a recipient

	    ## Pode-se adicionar quantos destinatários forem precisos
	    // $mail->addAddress('ellen@example.com');               	//Name is optional

	    ## Caso o destinatário responda o e-mail, a resposta será enviada por padrão para:
	    // $mail->addReplyTo('info@example.com', 'Information');

	    // $mail->addCC('cc@example.com');
	    // $mail->addBCC('bcc@example.com');

	    //Attachments

	    ## Caso queira adicionar anexos:
	    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
	    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

	    //Content
	    $mail->isHTML(true);                                  //Set email format to HTML

	    ## Assunto do e-mail:
	    $mail->Subject = $mensagem->__get('assunto');

	    ## Mensagem principal do email, com suporte a tags html.
	    $mail->Body    = $mensagem->__get('mensagem');

	    ## Mensagem principal do email, sem suporte a tags html.
	    $mail->AltBody = $mensagem->__get('mensagem');

	    $mail->send();
	    echo 'E-mail enviado com sucesso.';

	} catch (Exception $e) {
	    echo "Não foi possível enviar esse e-mail, tente novamente mais tarde.
	     	Detalhes do erro: {$mail->ErrorInfo}";
	}

	// ------------------------------------ / PHPMailer lib ---------------------------------------------- //

	// echo "<pre>";
	// 	print_r($mensagem);
	// echo "</pre>";

?>