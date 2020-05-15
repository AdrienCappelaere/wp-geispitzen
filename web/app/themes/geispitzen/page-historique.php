<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Geispitzen
 */

get_header();

// Query posts using a meta_query to compare the custom field: date_evenement.
$history = get_posts( array(
    'post_type'      	=> 'post',
    'posts_per_page' 	=> -1,
    'category'        	=> 4,
    'order'				=> 'DES',
));
?>

<div id="primary" class="content-area front-main">
	<main id="main" class="site-main">
		<div class="width margin-main">
        <h1 class="title-1">L'historique du Concordia de Geispitzen</h1>
        <h2>Plus de 100 ans d'histoire et de musique !</h2>


        
        <?php
					if( $history ) {
                        foreach( $history as $post ) {?>
                        <div class="timeline-item" date-is='<?php $date = the_field('annee'); echo $date; ?>'>
                            <p>
                            <?php
                                        $texte = the_field('texte');
                                        echo $texte;
                                    ?>
                            </p>
                        </div>
						<?php
						}
					}
				?>
        





<!-- 
	Ne pas fermer, balises présentes dans get_footer();
			</div>
		</main>	#main
	</div>	#primary
-->

<?php
// get_sidebar();
get_footer();