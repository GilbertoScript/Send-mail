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

		/* Email e senha do arquivo teste.php, em produção... */
		// private $email = null;
		// private $senha = null;

		private $para = null;
		private $assunto = null;
		private $mensagem = null;
		public $status = array('codigo_status' => null, 'descricao_status' => '');

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
	// $mensagem->__set('email', $_POST['email']);
	// $mensagem->__set('senha', $_POST['senha']);
	$mensagem->__set('para', $_POST['para']);
	$mensagem->__set('assunto', $_POST['assunto']);
	$mensagem->__set('mensagem', $_POST['mensagem']);

	// Caso a mensagem não seja válida, irá entrar no bloco if
	if(!$mensagem->mensagemValida()) {
		echo "Mensagem não é válida";

		header('Location: index.php');
	}

	// -------------------------------------- PHPMailer lib ---------------------------------------------- //
	$mail = new PHPMailer(true);

	try {
		// Acentuações
		$mail->CharSet = 'UTF-8';
		$mail->Encoding = 'base64';

	    //Server settings

	    // Log de erro
	    $mail->SMTPDebug = false;                      				//SMTP::DEBUG_SERVER
	    $mail->isSMTP();                                            //Send using SMTP

	    ## Informe aqui qual o servidor smtp(ex: Gmail, Outlook etc.)
	    $mail->Host       = 'smtp.gmail.com';                     	//Set the SMTP server to send through
	    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication

	    ## Coloque nas duas linhas a seguir seu email e senha:
	    $mail->Username   = 'email@teste.com';            //SMTP username
	    $mail->Password   = 'senha123';                       			//SMTP password
	    $mail->SMTPSecure = 'tls';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
	    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

	    //Recipients
	    ## Aqui informamos o remetente
	    $mail->setFrom('email@teste.com');

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
	    // $mail->addAttachment('/var/tmp/file.tar.gz');         	//Add attachments
	    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    	//Optional name

	    //Content
	    $mail->isHTML(true);                                  		//Set email format to HTML

	    ## Assunto do e-mail:
	    $mail->Subject = $mensagem->__get('assunto');

	    ## Mensagem principal do email, com suporte a tags html.
	    $mail->Body    = $mensagem->__get('mensagem');

	    ## Mensagem principal do email, sem suporte a tags html.
	    $mail->AltBody = $mensagem->__get('mensagem');

	    $mail->send();

	    // Status da mensagem:
	    $mensagem->status['codigo_status'] = 1;
	    $mensagem->status['descricao_status'] = 'E-mail enviado com sucesso.';

	} catch (Exception $e) {

		// Status da mensagem:
	    $mensagem->status['codigo_status'] = 2;
	    $mensagem->status['descricao_status'] = "
	    	Não foi possível enviar esse e-mail, tente novamente mais tarde.<br />
	     	Detalhes do erro: {$mail->ErrorInfo} 
	    ";
	}

	// ------------------------------------ / PHPMailer lib ---------------------------------------------- //

	// echo "<pre>";
	// 	print_r($mensagem);
	// echo "</pre>";

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

	<link rel="icon" href="./assets/logo.png">
    <link rel="stylesheet" href="./css/styles.css">

	<title>Send mail</title>
</head>
<body>
	
	<div class="container">
		<div id="div-header" class="py-3 text-center">
			<img class="d-block mx-auto mb-2" src="./assets/logo.png" alt="Send Mail logo" width="72" height="72">
			<h2>Send mail</h2>
			<p class="lead">Seu app de envio de e-mails particular</p>
			<p class="lead ref">Developed by 
				<a href="https://linktr.ee/GilbertoASJ" target="blank_">
					Gilberto Alves
				</a>
			</p>
		</div>

		<div class="row">
			<div class="col-md-12">
					
				<?php if($mensagem->status['codigo_status'] === 1) { ?>

					<div class="container">
						
						<h3 class="display-5 text-success">Sucesso</h3>
						<p><?= $mensagem->status['descricao_status'] ?></p>
						<a href="index.php" class="btn btn-primary btn-lg mt-3 text-white">Voltar</a>
					</div>

				<?php } ?>

				<?php if($mensagem->status['codigo_status'] === 2) { ?>
					
					<div class="container">
						
						<h3 class="display-5 text-danger">Ops! ocorreu um erro</h3>
						<p><?= $mensagem->status['descricao_status'] ?></p>
						<a href="index.php" class="btn btn-primary btn-lg mt-3 text-white">Voltar</a>
					</div>
						
				<?php } ?>

			</div>
		</div>
	</div>

</body>
</html>