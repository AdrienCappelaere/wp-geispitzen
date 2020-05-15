<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Geispitzen
 */

get_header();

$mot = get_posts( array(
    'post_type'      	=> 'page',
    'id'        	    => 156,
));
?>

<div id="primary" class="content-area front-main">
	<main id="main" class="site-main">
		<div class="width margin-main">
			<h1 class="title-1 ">Le mot du président</h1>
            <div class="mot-president">
            <?php
                if( $mot ) {
                    $noms = the_field('mot_du_president'); echo $noms;
                } else {
                    ?> <p> Il n'y a pas de mot du président. </p> <?php
                }
                ?>                
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