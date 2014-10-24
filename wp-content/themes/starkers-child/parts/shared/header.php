<header id="primary">
	<h1 id="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/Logo.3.0.svg" alt="" title="" /></a>
	<div class="word-slider" data-behavior="flexslider">
				<ul class="slides">
					<li class="word">beautiful</li>
					<li class="word">amazing</li>
					<li class="word">unique</li>
					<li class="word">incredible</li>
				</ul>
			</div>
	</h1>
<!--	<?php bloginfo( 'description' ); ?>-->
<!-- <?php get_search_form(); ?> -->
	<?php wp_nav_menu(array(
	    'container'=> 'nav',
	    'menu_id' =>'main-menu',
	    'menu_class' =>'menu',
	    'theme_location' => 'primary',
	    'items_wrap'      => '<ul id="%1$s" class="%2$s" data-behavior="mainMenu">%3$s</ul>'
	)); ?>

	<?php wp_nav_menu(array(
	    'container'=> 'nav',
	    'menu_id' =>'secondary-menu',
	    'menu_class' =>'menu',
	    'theme_location' => 'secondary',
	    'items_wrap'      => '<ul id="%1$s" class="%2$s" data-behavior="secondMenu">%3$s</ul>'
	)); ?>
</header>
<div id="main" role="main">