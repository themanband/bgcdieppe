<?php
/**
 * The template part for displaying a message that posts cannot be found.
 * @package Charity Fundraiser
 */
?>

<header>
	<h1 class="entry-title"><?php esc_html_e( 'Nothing Found', 'charity-fundraiser' ); ?></h1>
</header>

<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
	
	<p><?php printf( esc_html__( 'Ready to publish your first post? Get started here.', 'charity-fundraiser' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
<?php elseif ( is_search() ) : ?>
	<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'charity-fundraiser' ); ?></p><br />
		<?php get_search_form(); ?>
<?php else : ?>
	<p><?php esc_html_e( 'Dont worry it happens to the best of us.', 'charity-fundraiser' ); ?></p><br />
	<div class="read-moresec">
		<a href="<?php echo esc_url( home_url() ); ?>" class="button"><?php esc_html_e( 'Return to the home page', 'charity-fundraiser' ); ?></a>
	</div>
<?php endif; ?>