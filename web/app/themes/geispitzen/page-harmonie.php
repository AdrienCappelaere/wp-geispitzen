<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Geispitzen
 */

get_header();

$data = get_posts( array(
    'post_type'      	=> 'page',
    'id'        	    => 134,
));

$image = wp_get_attachment_image_src(get_field('image'), 'full');


?>

<div id="primary" class="content-area front-main">
	<main id="main" class="site-main">
		<div class="width margin-main">
			<h1 class="title-1 ">Toujours là où on ne l'attend pas</h1>
			<h2>« L’esprit est un instrument de musique qui, pour jouer juste, doit se sentir bien entouré… »</h2>
			<div class="event-block">
				<div class="event-img-block" style="background-image:url(<?php echo $image[0]; ?>)"></div>
				<div class="event-content" style="flex:1 1 0; padding-bottom:2rem;">
					<?php	$texte = the_field('texte');
					 		echo $texte ?>
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