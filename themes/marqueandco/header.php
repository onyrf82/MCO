<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
<?php astra_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">

<?php wp_head(); ?>
<?php astra_head_bottom(); ?>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
<?php astra_body_top(); ?>
<?php wp_body_open(); ?>
<div
<?php
	echo astra_attr(
		'site',
		array(
			'id'    => 'page',
			'class' => 'hfeed site',
		)
	);
	?>
>
	<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?></a>

	 <header class="header vh">
        <nav class="navbar fixed-top navbar-expand-lg">
            <div class="container-fluid justify-content-between align-items-center">
                <a class="navbar-brand logo d-flex justify-content-start align-items-start wow fadeInLeft" href="#">
                    <img src="<?= IMG_URL."logo.svg" ?>" alt="Marque&Co" width="41px" height="37px">
                    <img src="<?= IMG_URL."logo-text.svg" ?>" alt="Marque&Co" width="199px" height="33px">
                </a>
                <div class="nav wow fadeInRight">
                    <div class="menu-bar">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>

                    <div class="burger">
                        <div class="container">
                            <a class="logo d-flex justify-content-start align-items-start wow fadeInLeft" href="#">
                                <img src="<?= IMG_URL."logo.svg" ?>" alt="Marque&Co" width="41px" height="37px">
                    			<img src="<?= IMG_URL."logo-text.svg" ?>" alt="Marque&Co" width="199px" height="33px">
                            </a>
                            <div class="nav-burger">
								<?php
									$burgerMenuLeft = array(
										'theme_location'  => 'Burger-Menu-Left',
										'items_wrap'      => '<ul>%3$s</ul>',
										'container'       => '',
										'container_class' => '',
									);
									wp_nav_menu( $burgerMenuLeft );
								?>
								<?php
									$burgerMenuRight = array(
										'theme_location'  => 'Burger-Menu-Right',
										'items_wrap'      => '<ul>%3$s</ul>',
										'container'       => '',
										'container_class' => '',
									);
									wp_nav_menu( $burgerMenuRight );
								?>
                                <!-- <ul>
                                    <li><a href="#" class="active">Home</a></li>
                                    <li><a href="#">L’agence</a></li>
                                    <li><a href="#">Projets</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#">Green &Co</a></li>
                                    <li><a href="#">Recrutement</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul> -->
                            </div>
                            <div class="rs d-flex justify-content-end align-items-start wow slideInRight" data-wow-duration="1s" data-wow-delay="1s">
                                <a href="#" class="instagram d-flex justify-content-center align-items-center">
                                    <img src="<?= IMG_URL."icone-instagram.svg" ?>" alt="">
                                </a>
                                <a href="#" class="facebook d-flex justify-content-center align-items-center">
                                    <img src="<?= IMG_URL."icone-facebook.svg" ?>" alt="">
                                </a>
                                <a href="#" class="linkedin d-flex justify-content-center align-items-center">
                                    <img src="<?= IMG_URL."icone-linkedin.svg" ?>" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="nav-top">
						<?php
				            $mainMenu = array(
				                'theme_location'  => 'Main-Menu',
				                'items_wrap'      => '<ul class="d-flex justify-content-end align-items-start">%3$s</ul>',
								'container'       => '',
								'container_class' => '',
				            );
				            wp_nav_menu( $mainMenu );
				        ?>
						
                        
                    </div>
                </div>
            </div>
          </nav>
        <div class="slider">
			<?php				
				//echo '<div><img src="'.IMG_URL.'banner'.mt_rand(1, $max).'.jpg" alt=""></div>';
				$slides = get_field('slides', get_the_ID());
				if(!empty($slides)):
					foreach ($slides as $key => $slide) :
						$sliders[$key] = $slide['images'];
					endforeach;
					
					echo '<div><img src="'.$sliders[mt_rand(0, count($sliders) -1)].'" alt=""></div>';
				endif;				
			?>
			
        </div>
        <div class="textBanner vh d-flex justify-content-start align-items-center">
            <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                <h1>Créer des liens. <br>Donner du sens.</h1>
                <p>Marque and Co est une agence spécialisée dans l’accompagnement stratégique et opérationnel des marques à travers l’activation, le conseil et la créativité.</p>
            </div>
        </div>
    </header>
    <?php
	//astra_header_before();

	//astra_header();

	//astra_header_after();
	//astra_content_before();
	?>
	<div id="content" class="site-content">
		<div class="ast-container">
		<?php astra_content_top(); ?>
