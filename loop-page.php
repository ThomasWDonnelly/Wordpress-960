<?php
/**
 * Loop template for a page.
 *
 * @package WordPress-960
 */
?>

<!-- The loop -->
<?php if ( have_posts() ) :
while ( have_posts() ) {
	the_post();
	wp960_get_content( 'page' );
}
else: ?>
	<p><?php _e( 'Sorry, no posts match your criteria.', 'wp960' ); ?></p>
<?php endif; ?>
