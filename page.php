<?php get_header();?>
<section id="container">
	<div id="containerLeft">
		<?php if(have_posts()) { while(have_posts()) { the_post();?>
		<article class="contentDiv">
			<div class="thumbnail"></div>
			<h1 class="title">
				<a class="link" href="<?php echo the_permalink();?>"><?php echo the_title();?></a>
			</h1>
			<div class="time"><?php echo 'Publicado em '; the_time("d/m/Y");?></div>
		</article>
		<?php }} else {?>
		<p class="postContent">Não existe posts cadastrados ainda.</p>
		<?php }?>
	</div>
	<?php get_sidebar();?>
</section>
<?php get_footer();?>