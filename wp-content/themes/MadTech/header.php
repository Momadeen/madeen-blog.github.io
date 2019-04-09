<?php
/**
* header for Topaz theme
* This is the template that displays all of the <head> section and everything up until <div id="content">
* @package Topaz
*/

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' )?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
    </head>

<body <?php body_class() ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'MadTech' ); ?></a>

    <header id="masthead" class="site-header">

        <div class="top-bar-info clear-fix">
            <div class="container">
                <div class="row">
                <ul class="list-unstyled float-left">
                    <li><a href="#">Get a Member</a></li>
                    <li><a href="#">New Offer</a></li>
                    <li><a href="#">NewsFeed</a></li>
                    <li><a href="#">Info</a></li>
                </ul>
                    <div class="timer float-right"></div>
                </div>
            </div>
        </div><!--TopBar-->
        <div class="background-navbar">
        <div class="navbar container">

        <div class="site-branding">
            <?php the_custom_logo(); ?>
        </div><!-- site-branding-->

       <nav id="site-navigation" class="main-navigation navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" onclick="openNav()"></span>
             </button>
             <div class="overlay-nav" onclick="closeNav()">
                <?php wp_nav_menu( array( 
                    'theme_location' => 'header-menu',
                    'depth'	          => 1, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id'    => 'bs-example-navbar-collapse-1',
                    'menu_class'      => 'navbar-nav mr-auto menu',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
	                'walker'          => new WP_Bootstrap_Navwalker(),
                    ) );
                ?>
                </div><!--Overlay Nav Menu-->
            </nav>
        
       </div><!--Navbar-->
       </div>
    </header>
</body>
</html>