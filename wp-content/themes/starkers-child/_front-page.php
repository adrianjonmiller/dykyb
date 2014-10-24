<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
	<div id="page">
		<?php
		$args = array( 'post_type' => 'page', 'order' => 'ASC', 'orderby' => 'menu_order', 'category_name' => 'home' );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div id="<?php echo strtolower(get_the_title()) ?>" class="page" data-behavior="setPageSize inView loadPage" data-url="<?php echo get_permalink() ?>">
				<?php include($_GET[get_permalink()])?>
			</div>
		<?php endwhile; ?>
	</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>