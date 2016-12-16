<?php get_header();?>
	<section id="containerLeft">
		<?php if(have_posts()) { while(have_posts()) { the_post();?>
		<article class="contentDiv">
			<a class="thumbnail" href="<?php echo the_permalink();?>"><?php the_post_thumbnail('thumbnail');?></a>
			<h1 class="title">
				<a class="link" href="<?php echo the_permalink();?>"><?php echo the_title();?></a>
			</h1>
			<div class="time"><?php echo 'Publicado em '; the_time("d/m/Y");?></div>
		</article>
		<?php }} else {?>
		<p class="postContent">Não existe posts cadastrados ainda.</p>
		<?php }?>
	</section>
	<?php get_sidebar();?>
<?php get_footer(); ?>