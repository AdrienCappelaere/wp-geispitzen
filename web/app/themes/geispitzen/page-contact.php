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
			<h1 class="title-1 ">Contactez-nous !</h1>
			<h2>Nous vous répondrons dans les plus brefs délais.</h2>
			<div class="event-block">
				<div class="event-img-block" style="background-image: url('/app/uploads/2020/04/davide-baraldi-BKFflYZYjoA-unsplash-scaled.jpg')"></div>
				<div class="event-content" style="flex:1 1 0;">
                    <?php echo do_shortcode( '[fluentform id="1"]' ); ?>
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