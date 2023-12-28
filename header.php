<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name') ?></title>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<?php wp_head();?>

<body <?php body_class(); ?>>
	<!-- <h1>LEMBRAR DE RESOLVER OS ****</h1> -->
	<header>
		<section class="barra-promocional">
			<ul>
				<li>Frete grátis para todo o Brasil</li>
				<li>Use o cupom FANTO20 em sua primeira compra!</li>
			</ul>
		</section>

		<nav>
			<div class="container">
				<section class="navbar-container">
					<a href="#" class="navbar-brand">
						<img src="<?= get_template_directory_uri();?>/assets/img/logo.png" alt="Fanto ****">
					</a>
					<section class="navbar">
						<ul class="menu-institucional">
							<li><a href="#">Home</a></li>
							<li><a href="">Sobre</a></li>
						</ul>
						<ul class="menu-loja">
							<li><a href="#">Descansar</a></li>
							<li><a href="#">Explorar</a></li>
							<li><a href="#">Curtir</a></li>
						</ul>
					</section>
					<section class="menu-apoio-loja">
						<a href="/suporte"><img src="<?= get_template_directory_uri();?>/assets/img/headphone.svg" alt="Suporte"></a>
						<a href="/minha-conta"><img src="<?= get_template_directory_uri();?>/assets/img/profile.svg" alt="Minha Conta"></a>
						<a href="/carrinho" id="carrinho">
							<img src="<?= get_template_directory_uri();?>/assets/img/bag.svg" alt="Meu Carrinho">
							<!-- Quantidade do carrinho SE existir -->
							<span id="qtd-icon">5</span>
						</a>
					</section>
				</section>
			</div>
		</nav>

	</header>