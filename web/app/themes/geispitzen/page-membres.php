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
    'id'        	    => 152,
));

$image = wp_get_attachment_image_src(get_field('image'), 'full');

$membres = get_posts( array(
    'post_type'      	=> 'post',
    'posts_per_page' 	=> -1,
    'category'        	=> 5,
    'order'				=> 'ASC',
));

?>

<div id="primary" class="content-area front-main">
	<main id="main" class="site-main">
		<div class="width margin-main">
			<h1 class="title-1 ">Les membres de l'orchestre de Geispitzen</h1>
            <h2><?php echo the_field('subtitle'); ?></h2>
            <img src="<?php echo $image[0]; ?>" alt="" style="box-shadow:0px 10px 24px rgba(0, 0, 0, 0.15); margin-top:1rem;">
            <div class="membres-div">
            <?php
                if( $membres ) {
                    foreach( $membres as $post ) {
                        
                        ?>
                    <div class="membres-block">
                            <img src="<?php $image = wp_get_attachment_image_src(get_field('image_de_linstrument'), 'full'); echo $image[0]; ?>" alt="" class="membres-icon">
                            <h4><?php $instrument = the_field('instrument'); echo $instrument; ?></h4>
                            <?php $noms = the_field('name'); echo $noms; ?>
                    </div>
                    <?php
                    }
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