<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Geispitzen
 */

get_header();
$imageData = wp_get_attachment_image_src(get_post_thumbnail_id (), 'full');

?>

<div id="primary" class="content-area front-main">
	<main id="main" class="site-main">
		<div class="width margin-main">
			<h1 class="title-1 ">La concordia de Geispitzen recrute !</h1>
			<h2>Rejoignez nous pour allier musique et plaisir !</h2>
			<div class="event-block">
				<div class="event-img-block" style="background-image: url('<?php echo $imageData[0]; ?>')"></div>
                <div class="event-content" style="flex:1 1 0; padding-bottom:2rem;">
                    <h4>Nous recrutons pour la saison 2020 - 2021 :</h3>
                    <ul>
                        <li>Trompette</li>
                        <li>Trombone</li>
                        <li>Euphonium</li>
                    </ul>
                    <p>Vous êtes un musicien avec au moins 5 années de pratique instrumentale.</p>
                    <p>Venez nous rejoindre pour partager votre passion avec nous !</p>
                    <p>Répétition chaque vendredi à 20h15 à Geispitzen.</p>
                    <button class="btn">
						<a href="/contact">Nous rejoindre</a>
					</button>
                </div>
			</div>







<!-- 
	Ne pas fermer, balises présentes dans get_footer();
			</div>
		</main>	#main
	</div>	#primary
-->

<?php
// get_sidebar();
get_footer();