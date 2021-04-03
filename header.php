<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mero_music
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<style>
		.site-header-custom {
			min-height:40px;
			height:60px;
			/*box-shadow:2px 5px 20px black;*/
			color:white;
			font-family:'Comfortaa';
			position:fixed;
			top:0;
		}
		.container-custom a {
			font-family:'Comfortaa';
			color:whitesmoke;
		}
		.site-title-custom :hover, .site-navigation-custom ul li :hover {
			/*color:rgba(245,245,245 ,.5 );*/
			/*color:#ED145B;*/
			color:rgba(220,20,60 ,1);
			text-shadow:1px 1px 2px black;
			transition:.2s;
		}
		.site-title-custom {
			padding:20px 0 0 40px;
		}
		.site-navigation-custom {
			position:absolute;
			top:0;
			right:0;
		}
		.site-navigation-custom ul li {
			text-decoration:none;
			list-style:none;
			display:inline-flex;
			padding:65px 50px 0 0;
		}
		.scrollHeader {
			position:fixed;
			top:0;
			width:100%;
		}
		.scrollHeader + .site-content {
			padding-top:102px;
		}
	</style>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'wp_body_open' ); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mero-music' ); ?></a>

	<header id="masthead" class="site-header-custom">
		<div class="container-custom">
			<div class="site-branding-custom">
				<!--<div class="site-branding-logo">
					<?php// the_custom_logo(); ?>
				</div>--><!-- .site-branding-logo -->

				<div class="site-branding-text-custom" style="margin-left:5%;padding-top:.5%;">
					<?php if ( is_front_page() ) : ?>
						<h5 class="site-title-custom" ><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" ><?php bloginfo( 'name' ); ?></a></h5>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif; ?>

					<?php
					$description = get_bloginfo( 'description', 'display' );

					if ( $description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo esc_html( $description ); ?></p>
					<?php endif; ?>
				</div><!-- .site-branding-text -->
			</div><!-- .site-branding -->

			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<?php
					echo mero_music_get_svg( array( 'icon' => 'bars' ) );
					echo mero_music_get_svg( array( 'icon' => 'close' ) );
				?>
				<span class="primary-menu-label"><?php esc_html_e( 'Menu', 'mero-music' ); ?></span>
			</button>
            <!--
			<nav id="site-navigation" class="main-navigation navigation-menu">
			</nav>--><!-- #site-navigation -->
		</div><!-- .container -->
	</header><!-- #masthead -->

	<?php if( is_front_page() || !is_paged() ) {
		get_template_part( 'inc/header', 'image' );
	} ?>

	<div id="content" class="site-content">