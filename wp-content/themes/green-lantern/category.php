<?php get_header(); ?>
<div class="top-title-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 page-info">
                <h1 class="h1-page-title"><?php 
				/* translators: %s: category name */
				printf( esc_html__( 'Category Archives: %s', 'green-lantern' ), single_cat_title("", false)); ?></h1>				
            </div>
        </div>
    </div>
</div>
<div class="space-sep20"></div>	
<div class="content-wrapper"><div class="body-wrapper">
<div class="container">	
	<div class="row ">		
		<!--Blog Content-->
		<div class="col-md-9 col-sm-9">		
		<?php while(have_posts()):the_post();
		get_template_part( 'content', get_post_format() );		
		endwhile; ?>
		
			<div class="pagination">
					<?php if ( get_next_posts_link() ): ?>
						<?php next_posts_link('<span class="prev">&larr;</span>'.__('Older posts', 'green-lantern' ) ); ?>
						<?php endif; ?>
						<?php if ( get_previous_posts_link() ): ?>
						<?php previous_posts_link( __( 'Newer posts', 'green-lantern' ). '<span class="next">&rarr;</span>' ); ?>
						<?php endif; ?>					
					
			</div>
		</div>	
		<?php wp_link_pages(); ?>	
		<!--/Blog Content-->
		<?php get_sidebar(); ?>			
	</div>
</div>
</div>
</div>
<?php get_footer(); ?>