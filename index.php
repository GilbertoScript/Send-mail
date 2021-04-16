<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	
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
  				
					<div id="div-form" class="card-body font-weight-bold">
						<form action="send-proccess.php" method="post">
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
						</form>
					</div>
					</div>
      		</div>
      	</div>

	</body>
</html>