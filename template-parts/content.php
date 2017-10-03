<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		
		<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php ast_posted_on(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
	
	<div class="entry-content">
		<?php
		the_content( sprintf(
			__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'art-starter-theme' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		) );
		?>
		
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'art-starter-theme' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
	
	<footer class="entry-footer">
		<?php ast_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->