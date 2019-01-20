<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>

	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width,initial-scale=1">
	    <meta name="theme-color" content="#3ed073 ">
	    <meta name="msapplication-navbutton-color" content="#3ed073 ">
	    <meta name="apple-mobile-web-app-status-bar-style" content="#3ed073 ">
	    <title>EPICS</title>

	    <link rel="shortcut icon" href="images/favicon.png">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	    <link rel="stylesheet" href="fonts/icones/font-awesome.css" type="text/css">
	    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
	    <script type="text/javascript" src="js/style.js"></script>
	    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    	<script type="text/javascript" src="js/jquery.easing.min.js"></script>


	    <link rel="stylesheet" href="css/style.css" type="text/css">
	</head>
	

	<section id="epics">
		
		<div class="container bg-branco">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h1 class="titulo">estamos quase lá</h1>
					
				</div>
				<div class="col-lg-6 col-md-12 bg-claro item-col">
					<h1 class="uppercase sub-titulo">seu cadastro</h1>
					<?php
						if(isset($_SESSION['msg'])){
							echo $_SESSION['msg'];
							unset($_SESSION['msg']);
						}
					?>
					<br>
					<br>
					<br>
					
					<form class="form" method="POST" action="processa.php">
						<div class="input">
							<span>Qual e-mail você utiliza para se comunicar com seu cliente?</span>
							<input id="email" name="email" type="text" required="" placeholder="">
						</div>
						<div class="input">
							<br>
							<span>Como gostaria de ser chamado?</span>
							<input id="nome" name="nome" type="text" required="" placeholder="">
						</div>
						<div class="input">
							<br>
							<span>Seus clientes falam com você pelo WhatsApp e celular?</span>
							<div class="display-flex flex-space-between">
								<input class="metade" id="celular" name="celular" type="tel" required="" placeholder="Brasil (+55)">
								<input class="metade" id="telefone" name="telefone" type="tel" required="" placeholder="">
							</div>
						</div>
						<div class="input">
							<br>
							<div class="display-flex flex-space-between">
									<span>Crie uma senha:</span>
									<span>Confirme sua senha:</span>
							</div>
							<div class="display-flex flex-space-between">
									<input id="senha" class="metade" name="senha" type="password" required="" placeholder="">
									<input id="senha" class="metade" name="senha" type="password" required="" placeholder="">
							</div>
						</div>
						<div class="col-md-12 text-right">
							<input type="submit" value="Salvar" class="btn-salvar">
						</div>
						<div>
							<span>Conte pra gente, qual sua área de atuação?</span><br><br>
							 <input type="radio" name="area-atuacao" value="Fotógrafo / Videomaker profissional" checked> Fotógrafo / Videomaker profissional<br><br>
							 <input type="radio" name="area-atuacao" value="Fotógrafo / Videomaker iniciante"> Fotógrafo / Videomaker iniciante<br><br>
							 <input type="radio" name="area-atuacao" value="Fotógrafo / Não sou fotógrafo"> Fotógrafo / Não sou fotógrafo
							
						</div>
					</form>
					
				</div>
				<div class="col-lg-6 col-md-12 item-col">
					<h1 class="uppercase sub-titulo">resumo do pedido:</h1>
					<span class="titulo-epics">Epics Site Pro</span>
					<div>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<span class="texto-opiniao">22 opiniões</span>
					</div>
					<div class="mt30 row display-flex">
						<div class="col-md-6">
							<span class="valor-1">R$399</span><br>
							<span class="valor-2">R$ 399 <small>00</small> </span>
						</div>
						<div class="col-md-6 display-flex align-start">
							<span class="valor-3">12X</span>
							<span class="valor-4">R$</span>
							<strong class="valor-5">33</strong>
							<small class="valor-6">,25</small>
						</div>
					</div>
					<div class="mt30">
						<span class="texto-cupom">Possui cupom de desconto?</span>
						<div class="mt30 ovh">
							<input type="text" class="input-desconto"><a href="#" class="botao-desconto">Aplicar</a>
						</div>
					</div>
					<hr>
					<div>
						<span class="text-cinza">Escolha a forma de pagamento</span><br><br>
						<input type="radio" name="tipo-pagamento" id="tipo-pagamento1" class="input-pagamento d-none" checked value="Cartão de crédito">
						<label for="tipo-pagamento1">Cartão de Crédito <small>em até 12x sem juros</small></label>
						<input type="radio" name="tipo-pagamento" id="tipo-pagamento2" class="input-pagamento d-none" value="Boleto">
						<label for="tipo-pagamento2">Boleto Bancário <small>em até 8x sem juros</small></label>
					</div>
					<hr>
					<div>
						<h1 class="garantia">Garantia de devolução</h1>
						<span class="text-cinza">Se em 90 dias não tiver o resultado esperado ou achar difícil de usar, devolvemos 100% do valor investido</span><br><br>
						<span class="text-cinza">Ao finalizar você concorda com os termos de uso.</span><br>
						<a href="#" class="termos-de-uso"><strong>Ler termos de uso.</strong></a>
					</div>

					<div class="mt30">
						<button class="botao-finalizar" type="button" data-target="#myModal"  data-toggle="modal">finalizar pedido</button>
					</div>					
				</div>				
			</div>			
		</div>		
	</section>
</html>
