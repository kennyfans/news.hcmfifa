<?php
	/**
	* @package redwaves-lite
	*/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>                         
	<div class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#"><?php redwaves_breadcrumb(); ?></div>                      			
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php redwaves_post_meta(); ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php the_content(); ?>
		<?php redwaves_related_posts(); ?>
		<?php wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'redwaves-lite' ),
			'after'  => '</div>',
		) ); ?>
		<?php redwaves_next_prev_post(); ?>
		<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="20" width="100%" data-colorscheme="light"></div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->