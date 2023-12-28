<?php
  
  function fanto_add_woocommerce_support(){
    add_theme_support('woocommerce');
  }
  add_action('after_setup_theme', 'fanto_add_woocommerce_support');

  function fanto_css(){
    wp_register_style('fanto-style', get_template_directory_uri().'/style.css', [], '0.0.0', false);
    wp_enqueue_style('fanto-style');
  }
  add_action('wp_enqueue_scripts', 'fanto_css');

?>


<?php //COMPONENTE DE PRODUTO ?>
<?php function fanto_listar_produtos($products){ ?>
  <div class="lista-produtos">
    <?php foreach($products as $product): ?>
      <a href="<?= $product['link'] ?>" class="produto">
        <figure>
          <img src="<?= $product['img'] ?>" alt="<?= $product['name'] ?>">
        </figure>
        <h1 class="nome"><?= $product['name'] ?></h1>
        <span class="valor-avista"><?= $product['price'] ?></span>
        <!-- <span class="valor-parcelado">ou em 4x de R$2900,25</span> -->
      </a>
    <?php endforeach; ?>
    </div>
<?php } ?>

