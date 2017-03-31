<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage PISBI
 * @since PISBI 1.0
 */
?>
<?php if(is_home()) {?>
	<article id="post-<?php the_ID();?>" class="contentDiv <?php echo get_post_format();?>">
		<header class="contentHeader">
			<a class="thumbnail" href="<?php echo the_permalink();?>"><?php the_post_thumbnail('thumbnail');?></a>
			<h1 class="title">
				<a class="link" href="<?php echo the_permalink();?>"><?php echo the_title();?></a>
			</h1>
		</header>
		<footer class="contentFooter">
			<div class="footerOption">
				<div class="time"><?php echo 'Publicado em '; the_time("d/m/Y");?></div>
			</div>
			<?php
				edit_post_link(
					__('<span class="editContent">Editar</span>', 'pibsi')
				)
			?>
		</footer>
	</article>
<?php }?>