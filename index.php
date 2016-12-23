<?php get_header();?>
	<main id="principalSection">
		<section id="containerLeft">
			<?php if(have_posts()) { if(is_home() && !is_front_page()) {?>
				<header class="postTitle">
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php } while(have_posts()) { the_post(); get_template_part('template-parts/content', get_post_format());?>
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
	</main>
<?php get_footer(); ?>