<?php get_header();
$wl_theme_options = weblizar_get_options();
if ($wl_theme_options['_frontpage']=="on" && is_front_page() && 'posts' == get_option( 'show_on_front' )): get_template_part( 'frontpage' );
else: 
get_template_part('index', 'banner'); ?>
<div class="content-wrapper">
	<div class="body-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-9">
					<?php while(have_posts()):the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
					<?php endwhile; ?>
					<div class="pagination">
					<?php if ( get_next_posts_link() ): ?>
						<?php next_posts_link('<span class="prev">&larr;</span>'.__('Older posts', 'green-lantern' ) ); ?>
						<?php endif; ?>
						<?php if ( get_previous_posts_link() ): ?>
						<?php previous_posts_link( __( 'Newer posts', 'green-lantern' ). '<span class="next">&rarr;</span>' ); ?>
						<?php endif; ?>
					</div>			
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>
<?php 
endif;
get_footer(); ?>