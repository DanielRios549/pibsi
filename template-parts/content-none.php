<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage PISBI
 * @since PISBI 1.0
 */
?>

<article class="noContent">
	<header class="page-header">
		<h1 class="page-title"><?php _e('Nada encontrado', 'pibsi');?></h1>
	</header>

	<div class="page-content">
		<?php if ((is_home() or is_category()) && current_user_can('publish_posts')) {?>

			<p><?php printf(__('Pronto pra publicar seu primeiro post? <a href="%1$s">Começe aqui</a>.', 'pibsi'), esc_url(admin_url('post-new.php')));?></p>

		<?php } elseif (is_search()) {?>

			<p><?php _e( 'Desculpe, não encontramos nada com a palavra desejada, tente pesquisar novamente.', 'pibsi');?></p>

        <?php } else {?>

			<p><?php _e('Parece que você está tentando acessar uma página que não existe, por favor, verifique o link e tente novamente.', 'pibsi');?></p>

        <?php } ?>
	</div>
</article>