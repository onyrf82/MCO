<?php
/*
  Template Name: Homepage
*/
  	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly.
	}

	get_header();
?>
<main>       
		<section id="section1" class="vh d-flex justify-content-center align-items-center">
			<div class="container d-flex justify-content-between align-items-center">
				<div class="blocImg">
					<div class="imgBig wow fadeInUp">
						<img src="<?= get_field("agence_big") ?>" alt="">
					</div>
					<div class="imgSmall wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s">
						<img src="<?= get_field("agence_small") ?>" alt="">
					</div>
					<div class="imgVerySmall wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay="1.2s">
						<img src="<?= get_field("agence_very_small") ?>" alt="">
					</div>
				</div>
				<div class="blocText wow fadeInRight">
				<div class="blocTitre">
					<span><?= get_field("agence_titre1") ?></span>
					<h2><?= get_field("agence_titre2") ?></h2>
					</div><?= get_field("agence_description") ?><a href="#" class="btn" title="En savoir plus">En savoir plus</a></div>
			</div>
		</section>
	
        <section id="section2" class="vh d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row introText">
                    <div class="col text-center wow fadeInUp" data-wow-duration="600ms" data-wow-delay="600ms">
                        <p><?= get_field("expertise_grand_titre") ?></p>
                    </div>
                </div>
            </div>
        </section>
		<?php  
			$liste_expertise = get_field('liste_expertise', get_the_ID());
			if(isset($liste_expertise)):
		?>
        <section id="section3" class="vh d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">					
					<?php if(!empty($liste_expertise)):
						foreach ($liste_expertise as $key => $expertise) :
					?>
						<div class="col-lg-4 col-md-12 textExpertise wow slideInUp">						
							<div class="img-expertise img-expertise<?= ++$key ?>">
								<img src="<?= $expertise['image']; ?>" alt="">
							</div>
							<div class="expertise">
								<h3><?= $expertise['titre']; ?></h3>
								<?= $expertise['sous-titres']; ?>
								<?= $expertise['description']; ?>
							</div>
						</div> 
					<?php endforeach; endif; ?>
                </div>
            </div>
        </section>
		<?php
			endif;
		?>
        <section id="section4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 d-flex justify-content-lg-start justify-content-center wow fadeInLeft">
                        <p>Projets</p>
                    </div>
                    <div class="col-lg-6 col-md-12 d-flex justify-content-lg-end justify-content-center wow fadeInRight">
                        <a href="#" class="btn" title="En savoir plus">Tout voir</a>
                    </div>
                </div>
                <div class="row projets">
					<?php
						$arg = array(
							'post_type' => 'projet',
						);
						$q = new WP_Query( $arg );
						if( $q->have_posts() ):
							while( $q->have_posts() ):
								$q->the_post();

								$class = get_the_title();
								if( stripos( 'custom', $class ) ) $class = 'item_custom';
					?>
	
                    <div class="col-md-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                        <a href="#">
                            <div class="card">
                                <img src="<?= get_field('projet_image') ?>" alt="">
                                <div class="card-body">
                                <h4 class="card-title"><?= get_field('projet_titre') ?></h4>
                                <p class="card-text"><?= get_field('projet_description') ?></p>
                                <span class="btnAdd">+</span>
                                </div>
                            </div>
                        </a>
                    </div>
					<?php 
					endwhile; 
						wp_reset_postdata();
					endif;
					?>
                    
                </div>
                <div class="text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                    <a href="#" class="btn">En savoir plus</a>
                </div>
            </div>
        </section>
		<?php
			$liste_partenaires = get_field('liste_partenaires', get_the_ID());
			if(isset($liste_partenaires)):
		?>
        <section id="section5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 d-flex justify-content-lg-start justify-content-center wow fadeInLeft">
                        <p>Ils ont déjà travaillé avec nous</p>
                    </div>
                    <div class="col-lg-6 col-md-12 d-flex justify-content-lg-end justify-content-center wow fadeInRight">
                        <a href="#" class="btn" title="En savoir plus">En savoir plus</a>
                    </div>
                </div>
                <div class="row slide-partenaire justify-content-around align-items-center">
					
					<?php if(!empty($liste_partenaires)):
						foreach ($liste_partenaires as $key => $partenaire) :
					?>
                    <div class="col-lg-3 col-12 text-center wow slideInUp">
                        <a href="<?= $partenaire['url']; ?>"><img src="<?= $partenaire['logo']; ?>" alt=""></a>
                    </div>
					<?php endforeach; endif; ?>
                    
                </div>
            </div>
        </section>
		<?php endif; ?>
        <section id="section6" class="vh d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col hello wow fadeInUp">
                        <div class="blocTitre">
                            <span>Say hello !</span>
                            <h2>Et si on construisait <br>de belles choses <br>ensemble ?</h2>
                        </div>
                        <ul>
                            <li>
                                <span>Travailler ensemble</span>
                                <a href="#">contact@marqueandco.fr</a>
                            </li>
                            <li>
                                <span>Écrire à notre sujet</span>
                                <a href="#">presse@marqueandco.fr</a>
                            </li>
                            <li>
                                <span>Rejoindre notre équipe</span>
                                <a href="#">job@marqueandco.fr</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
		<?php  $liste_marquee = get_field('liste_marquee', get_the_ID()); ?>
        <section id="section7">
            <marquee behavior="scroll" direction="left" width="100%">
				<?php if(!empty($liste_marquee)):
						foreach ($liste_marquee as $key => $marquee) :
				?>
					<a href="<?= $marquee['url']; ?>">Marque&Co <?= $marquee['titre']; ?></a>
				<?php endforeach; endif; ?>               
             </marquee>
        </section>
        <section id="section8" class="vh d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="blocTitre text-center">
                            <h3>Nous contacter</h3>
                        </div>
						
						<?php echo do_shortcode( '[contact-form-7 id="86" title="Formulaire de contact"]' ); ?>
                        
                    </div>
                </div>
            </div>
        </section>
    </main>
	
	<div id="modal" style="display: none">
        <div class="sousModal">
            <div class="textModal">
                <div>
                    <span>Oops</span>
                    <h2>Pas d’offres <br/>en ce moment...</h2>
                    <p>Notre équipe est au complet pour le moment. N’hésitez pas à déposer votre candidature spontanée à l’adresse <a href="mailto:job@marqueandco.fr">job@marqueandco.fr</a></p>
                </div>
            </div>
            <div class="imgModal">
                <img src="<?= IMG_URL."ops.jpg" ?>" alt="">
            </div>
        </div>
    </div>
<?php

	get_footer();
?>