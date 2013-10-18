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

	<div class="col-1 banner">
		<ul>
		<?php
		$args = array( 'post_type' => 'banner', 'order' => 'ASC', 'orderby' => 'menu_order' );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();?>	
			<li><?php the_content(); ?></li>
		<?php endwhile; ?>
		</ul>
	</div>
</div>
<div class="grid" data-behavior="grids" data-columns="3, 2, 3">
	<?php dynamic_sidebar( 'home' ); ?>
</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>