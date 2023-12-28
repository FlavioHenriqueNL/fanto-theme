<?php
	//TEMPLATE NAME: Home loja
	get_header();

	$data = [];
	function format_products($products, $img_size = "full"){
		$products_final = [];
		foreach($products as $product){ 
			$products_teste = $product;
			$products_final[] = [
				'name' => $product->get_name(),
				'price' => $product-> get_price_html(),
				'img' => wp_get_attachment_image_src($product->get_image_id(), $img_size)[0],
				'link' => $product->get_permalink($product->get_id()),
			];
		}
		?>
		
		<?php
		return $products_final;
	}

	$produtos_novos = wc_get_products([
		'limit' => 8,
		'orderby' => 'date',
		'order' => 'DESC',
	]);
	$produtos_mais_vendidos = wc_get_products([
		'limit' => 4,
		'meta_key' => 'total_sales',
		'orderby' => 'meta_value_num',
		'order' => 'DESC'
	]);

	$data['novos'] = format_products($produtos_novos);
	$data['mais_vendidos'] = format_products($produtos_mais_vendidos);
?>


<main class="container">
		<section class="secao-produtos" id="produtos-mais-vendidos">
			<h3 class="sub-titulo">Tá bombando</h3>
			<h1 class="titulo">Produtos mais vendidos</h1>
			<?php fanto_listar_produtos($data['mais_vendidos']); ?>
			
		</section>

		<section class="secao-produtos" id="categorias">
			<h3 class="sub-titulo">Direto ao ponto</h3>
			<h1 class="titulo">Fases da vida</h1>

			<article class="lista-categorias">
				<a href="" class="categoria">
					Descansar
				</a>
				<a href="" class="categoria">
					Explorar
				</a>
				<a href="" class="categoria">
					Curtir
				</a>
			</article>
		</section>

		<section class="secao-produtos" id="vitrine">
			<h3 class="sub-titulo">Nossa vitrine</h3>
			<h1 class="titulo">Mais alguns produtos</h1>
			
			<?php fanto_listar_produtos($data['novos']); ?>

		</section>

	</main>

<?php get_footer();?>