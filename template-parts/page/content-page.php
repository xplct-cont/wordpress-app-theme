<?php
/**
 * Template part for displaying page content in page.php
 * 
 * @subpackage meditation-and-yoga
 * @since 1.0
 * @version 0.1
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php meditation_and_yoga_edit_link( get_the_ID() ); ?>
	</header>
	<div class="entry-content">
		<?php the_post_thumbnail(); ?>
		<p><?php the_content();?></p>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'meditation-and-yoga' ),
				'after'  => '</div>',
			) );
		?>
	</div>
</article>