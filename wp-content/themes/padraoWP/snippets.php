<!-- URL DO SITE -->
	<?php bloginfo('url' ); ?>

<!-- DIRETORIO DO TEMA -->
	<?php bloginfo('template_directory' ); ?>

<!-- INCLUDE WP (não precisa do .php) -->
	<?php get_template_part( '_inc/arquivo'); ?>

<!-- IMPRIMIR SHORTCODE NO PHP -->
	<?php echo do_shortcode( '[SHORTCODE]' ); ?>

<!-- MENU -->
	<?php 
	wp_nav_menu( array(
	'menu' => 'topo',
	'theme_location' => 'menu-header',
	'container' => 'ul',
	'echo' => true,
	'depth' => 0,
	) );
	?>

<!-- 
	LOOP POST 
-->
<!-- TITULO -->
<?php the_title(); ?>

<!-- DATA -->
	<?php echo get_the_date(); ?>

<!-- AUTOR -->
	<?php the_field('autor'); ?>

<!-- RESUMO -->
	<?php the_excerpt(); ?>

<!-- LINK -->
	<?php the_permalink(); ?>

<!-- TODO O CONTEUDO DO CONTENT -->
	<?php the_content(); ?>

<!-- THUBNAIL -->
	<?php the_post_thumbnail('tamanho', array('class'=>'classe aqui')); ?>

<!-- CAMPO PERSONALIZADO -->
	<?php the_field('nome'); ?> <!-- (se for dentro do post ou pagina) -->
	<?php the_field('nome', ID); ?><!-- (se for fora do post ou pagina) -->

<!-- 
	LOOP POST 
-->