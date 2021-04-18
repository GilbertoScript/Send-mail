<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	
    	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    	<!-- Google Fonts -->
    	<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

		<link rel="icon" href="./assets/logo.png">
    	<link rel="stylesheet" href="./css/styles.css">

    	<title>Send mail</title>

    	<style type="text/css" media="screen"></style>

	</head>

	<body>

		<!-- Header -->
		<header class="container-fluid bg-blue">
			<!-- Navbar -->
			<nav class="navbar navbar-expand-lg navbar-dark">
			 	
				<a class="navbar-brand" href="index.php">
				    <img src="./assets/logo.png" width="30" height="30" class="d-inline-block align-top" alt="Logo Send mail">
				    Send mail
				  </a>

			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item">
			        <a class="nav-link" href="#inicio">Início<span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#como-usar">Como usar</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#aplicativo">Aplicativo</a>
			      </li>
			    </ul>
			  </div>
			</nav>  
		</header>
		<!-- / Header -->

		<!-- Início -->
		<section id="inicio" class="container">
			<div class="row mt-3">
				<div class="col-md-12">
					<div id="div-header" class="py-3 text-center">
						<img class="d-block mx-auto mb-2" src="./assets/logo.png" alt="Send Mail logo" width="72" height="72">
						<h1>Send mail</h1>
						<p class="lead">Seu app de envio de e-mails particular</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 mt-4">
					<h2 class="mt-5 display-4">
						Envie seus emails,<br> fácil e rápido<br> com Send mail!
					</h2>

					<a href="#como-usar" class="btn btn-primary btn-lg mt-3">Comece a usar</a>
				</div>
				<div class="col-md-6 mt-4">
					<img src="./assets/email-image.png" alt="Imagem de email" class="img-fluid mt-3">
				</div>
			</div>
		</section>
		<!-- / Início -->

		<!-- Como usar -->
		<section id="como-usar" class="container-fluid border-top border-container">
			<div class="row pl-5 pr-5">
				<div class="col-md-12">
					<h2 class="text-center mt-5">Como usar</h2>
				</div>
			</div>

			<div class="row pl-5 pr-5">
				<!-- Passo 1 -->
	      	<div class="col-md-6 mt-4 border-right border-primary">
					<h3 class="text-center ">Passo 1</h3>
					<h4 class="text-center">Configure um email e senha válidos</h4>
					<p align="justify">Para começar a usar o Send mail temos alguns pré-requisitos:</p>
					<p align="justify">
						Que você esteja planejando utilizar um Gmail, pois a aplicação ainda não possui suporte a outros tipos de serviços SMTP. <br /><br /> 
						Que você aceite o acesso a aplicação menos restritas no seu Gmail, por <a href="https://myaccount.google.com/lesssecureapps?gar=1&pli=1&rapt=AEjHL4M_gg12tOtYuAx4dqNCn3bpT4SXNB28HBpMRUvPKTTYMLVZPwkyDr_bZl4XKcuZybKETsSb1kMIK12Vy2E3oztY2ZSBFA">aqui </a>não se preocupe, a aplicação é segura e você pode ativar essa funcionalidade apenas quando for mandar seus e-mails pelo Send mail.<br /><br /> 
						Insira e-mail e senha válidos, para que não ocorra nenhum erro ao fazer o envio dos emails.<br /> <br /> 
						E para manter a aplicação mais segura e que não ocorra nenhum tipo de vazamento de dados, sempre quando for utilizar o Send mail, preencha corretamente os dois formulários, já que não armazenamos e nem recuperamos os dados do usuário em nenhum banco de dados, cache, cookies... É necessário que sempre preencha os campos de login e senha quando for utilizar o app.
					</p>
				</div>
				<!-- / Passo 1 -->

				<!-- Passo 2 -->
				<div class="col-md-6 mt-4 border-left border-primary">
					<h3 class="text-center">Passo 2</h3>
					<h4 class="text-center">Envie seus emails</h4>
					<p align="justify">Agora que já realizou a configuração, vamos enviar os emails:</p>
					<p align="justify">
						Não tem muito segredo, no primeiro formulário preencha login e senha com o e-mail que você configurou no passo 1.<br /> <br /> 
						Acesse o segundo formulário, e no campo 'Para' preencha com o e-mail do destinatário(quem irá receber o seu e-mail)<br /><br /> 
						No campo 'Assunto' preencha com o assunto(cabeça do e-mail).<br /><br /> 
						E no campo 'Mensagem' preencha com a mensagem(corpo do e-mail) que você quer enviar.<br /><br /> 
						Clique em 'Enviar mensagem' e confira se você foi levado para a página de sucesso, recomendo enviar um e-mail para você mesmo como um teste :D !
					</p>
				</div>
				<!-- / Passo 2 -->
	      </div>
	   </section>
	   <!-- / Como usar -->

		<!-- Container Form  -->
		<section id="aplicativo" class="container-fluid">
			<!-- Header -->
			<div id="div-header" class="py-3 text-center">
				<img class="d-block mx-auto mb-2" src="./assets/logo.png" alt="Send Mail logo" width="72" height="72">
				<h2>Send mail</h2>
				<p class="lead">Seu app de envio de e-mails particular</p>
			</div>
			<!-- / Header -->

			<!-- Div form -->
			<div id="div-form" class="card-body font-weight-bold row">
				<form action="send-proccess.php" method="post" class="d-flex">

					<div id="primeiro-formulario" class="col">
						<div class="form-group">
							<label for="email">Email</label>
								<input 
									name="email" 
									type="email" 
									class="form-control" 
									id="email" 
									placeholder="Seu email aqui"
								>
						</div>

						<div class="form-group">
							<label for="senha">Senha</label>
								<input 
									name="senha" 
									type="password" 
									class="form-control" 
									id="senha" 
									placeholder="Sua senha aqui"
								>
								<p class="text-secondary mt-3">Não se esqueça de após colocar e-mail e senha válidos, <a href="#como-usar">permitir o acesso da aplicação no seu Gmail.</a></p>
						</div>
					</div>

					<div id="segundo-formulario"  class="col">
						<div class="form-group">
							<label for="para">Para</label>
							<input 
								name="para" 
								type="email" 
								class="form-control" 
								id="para" 
								placeholder="nome@dominio.com.br"
							>
						</div>

						<div class="form-group">
							<label for="assunto">Assunto</label>
							<input 
								name="assunto" 
								type="text" 
								class="form-control" 
								id="assunto" 
								placeholder="Assundo do e-mail"
							>
						</div>

						<div class="form-group">
							<label for="mensagem">Mensagem</label>
							<textarea 
								name="mensagem" 
								placeholder="Mensagem do e-mail" 
								class="form-control" 
								id="mensagem"
								rows="3" 
							>
							</textarea>
						</div>

						<button type="submit" class="btn btn-color btn-lg">Enviar Mensagem</button>
					</div>
				</form>
			</div>
			<!-- / Div form -->
      </section>
      <!-- / Container Form  -->

      <!-- Footer -->
      <footer class="pt-2 pb-2 bg-blue container-fluid">
			<p class="lead ref text-center  text-white">Developed by 
				<a href="https://linktr.ee/GilbertoASJ" target="blank_" class=" text-white">
					Gilberto Alves
				</a>
			</p>	
		</footer>
		<!-- / Footer -->


      <!-- Optional JavaScript; choose one of the two! -->

	   <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
	   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

	   <!-- Option 2: Separate Popper and Bootstrap JS -->
	   <!--
	   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
	   -->
	</body>
</html>