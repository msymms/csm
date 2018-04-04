<?php
/* 
 * Custom Header for the front-page
 * 
 * 
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <nav id="site-navigation" class="home-navigation">
        <div class="navbar">
            <input id="hamburger" type="image" src="/wp-includes/images/navicon_white.png" class="home-menu-button" aria-controls="primary-menu" aria-expanded="false">
            </input>
        </div>
        <?php
            wp_nav_menu( array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                    'container_id'    => 'menu-container'
            ) );
        ?>
    </nav><!-- #site-navigation -->
    <div id="content" class="site-content">

    
