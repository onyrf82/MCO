<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
	</div> <!-- ast-container -->
	</div><!-- #content -->

	<footer>
        <div class="container">
            <div class="row foot-top wow fadeInUp">
                <div class="lgo col-lg-4 col-md-12 justify-content-lg-start justify-content-center align-items-lg-start align-items-center wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s">
                    <a class="logo-foot d-flex justify-content-lg-start justify-content-center align-items-start wow fadeInLeft" href="#">
                        <img src="<?= IMG_URL."logo.svg" ?>" alt="Marque&Co" width="41px" height="37px">
                        <img src="<?= IMG_URL."logo-text.svg" ?>" alt="Marque&Co" width="199px" height="33px">
                    </a>
                </div>
                <div class="coor col-lg-4 col-md-12 justify-content-center text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                    30, Boulevard Belle Rive <br/>92500 RUEIL-MALMAISON
                    <a href="tel:+33147140065" class="d-block">+33 (0)1 47 14 00 65</a>
                </div>
                <div class="rs col-lg-4 col-md-12 d-flex justify-content-lg-end justify-content-center align-items-start wow slideInRight" data-wow-duration="1s" data-wow-delay="1s">
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
            <div class="row d-flex justify-content-between align-items-start">
                <div class="col-lg-6 col-md-12 legales d-flex justify-content-lg-start justify-content-center align-items-center wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay="1.2s">
                    <a href="#">Mentions légales</a>
                    <a href="#">Politique de cookies</a>
                </div>
                <div class="col-lg-6 col-md-12 droits d-flex justify-content-lg-end justify-content-center wow fadeInRight" data-wow-duration="1.2s" data-wow-delay="1.2s">
                    <span>©Marque&Co 2021. Tous droits réservés</span>
                </div>
            </div>
        </div>
    </footer>
	
	</div><!-- #page -->
<?php	
	wp_footer(); 
?>
	</body>
</html>
