<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package codeinwp
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11"/>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


        <!-- [begin] header -->
        <header>
			
        	<div class="container">			
				<?php $header_img_url = get_header_image(); ?>
				
				<?php if (!empty($header_img_url)) : ?>
					<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
				<?php endif; ?>
				
 				<div class="logo">
					<?php if ( get_theme_mod( 'codeinwp_logo' ) ) : ?>
                        <div class='site-logo'>
                            <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo get_theme_mod( 'codeinwp_logo' ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
                        </div>
                    <?php else : ?>
                        <div> <!-- was hgroup -->
                            <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
                            <h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
                        </div>
                    <?php endif; ?>
                </div><!-- .logo -->

            </div><!-- .container -->
            
            <div class="main-menu-wrap">
            	<div class="container">
                               
                	<div class="main-navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'my-primary', 'container' => false ) ); ?>
                    </div>
                   
                </div><!-- .container -->
                <div class="menu-shadow"></div>
            </div><!-- .main-menu-wrap -->
            	
        </header>  
        <!-- [end] header -->