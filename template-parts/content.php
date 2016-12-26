<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage PISBI
 * @since PISBI 1.0
 */
?>
<?php if(is_home() || is_category()) {?>
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
<?php } else {?>
	<article id="post-<?php the_ID();?>" class="contentDiv">
		<header class="contentHeader">
			<h1 class="title">
				<span class="link"><?php echo the_title();?></span>
			</h1>
		</header>
		<div id="postContent">
			<?php the_content();?>
		</div>
		<?php
			if (comments_open() || get_comments_number()) {
				comments_template();
			}
		?>
	</article>
<?php }?>