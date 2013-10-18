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
<div class="grid" data-behavior="grids">
		<div class="col-2-3">
			<div class="module">
				<iframe width="560" height="315" src="//www.youtube.com/embed/d_TOD6mSWjc" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="col-1-3">
			<div class="module">
				<p>
					Hi, my name is Ben Hatch. I’m recently graduated from Las Plumas High School and live in a small town called Oroville in California. My vision for DYKYB is that people will change the way they perceive themselves and others in a positive way, and to bring out the value in each other. The idea for DYKYB really came to me because of a conference held at my high school. Around 100 kids were picked to discuss and talk about things that would make our school better and things students struggled with. They passed a microphone around  so that whoever wanted to could talk. There was an overwhelming response from people with low self esteem or who felt that they’re so pressured to look good if they want to be successful. Another topic that came up a lot that day was the problems students were having with being made fun of for the way they look. I had noticed this issue at our school and in society in general, and after hearing that, I wanted to do something, but I didn’t know what.  It wasn't until about a week later that I was up late one night and thought of the phrase "don't you know you're beautiful."  I ran into my brothers room to tell him my I idea so I wouldn’t second-guess myself in the morning.  The next few days I talked to a few friends, telling them my idea and brainstorming new ones.  It boiled down to making a video and selling bracelets in pairs that say, "Don't You Know You're Beautiful," so that people can keep one and give the other away. So with the help of my friends, Reagan Keeler and Kurt Libby, we made the video, I bought the bracelets, and we’re moving forward into what we hope will become a powerful movement. We started with 600 bracelets and all the money we have raised is used to buy more, and to further the idea and the movement. The rest is where you come in. Help spread the word. Find the beauty in others. Help re-empower a self-doubting generation.
				</p>
			</div>
		</div>
</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>