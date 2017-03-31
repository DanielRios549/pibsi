<?php get_header();?>
	<main id="principalSection">
		<section id="containerLeftPost">
		<?php
			if(have_posts()) {
				while(have_posts()) {
					the_post();
					
					get_template_part('template-parts/content', 'single');
				}
			}
			else {
				get_template_part('template-parts/content', 'none');
			}
		?>
		</section>
	</main>
<?php get_footer(); ?>