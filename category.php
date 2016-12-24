<?php get_header();?>
	<main id="principalSection">
		<section id="containerLeft">
		<?php
			query_posts($query_string . "&order=ASC");
			if(have_posts()) {
				while(have_posts()) {
					the_post();
					
					get_template_part('template-parts/content', get_post_format());
				}
				the_posts_pagination(array(
					'prev_text'          => __('Previous page', 'pibsi'),
					'next_text'          => __('Next page', 'pibsi'),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'pibsi') . ' </span>',
				));
			}
			else {
				get_template_part('template-parts/content', 'none');
			}
		?>
		</section>
		<?php get_sidebar();?>
	</main>
<?php get_footer(); ?>