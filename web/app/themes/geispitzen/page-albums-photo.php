<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Geispitzen
 */

get_header();

$albums = get_posts( array(
	'post_type'      	=> 'post',
	'posts_per_page' 	=> -1,
	'category'        	=> 2,
	'order'				=> 'ASC',
	'meta_key'			=> 'galerie',
    'meta_value' 		=> array(''),
    'meta_compare' 		=> 'NOT IN'
));
?>

<div id="primary" class="content-area front-main">
	<main id="main" class="site-main">
		<div class="width margin-main">
			<h1 class="title-1 ">Tous nos albums photo</h1>
            <?php
					if( !$albums ) { ?>
						<p>Désolés, il n'y a pas d'album photo pour le moment !</p>
					<?php
					} else {
						foreach( $albums as $post ) { 
                            ?>
						<div class="event-block">
							<?php $image = wp_get_attachment_image_src(get_field('image'), 'large'); ?>
							<div class="event-img-block" style="background-image: url('<?php echo $image[0]; ?>')"></div>
							<div class="event-content">
								<h3 class="event-title"><?php the_field('title');?></h3>
								<div class="event-description">
									<?php echo custom_field_excerpt();?>
								</div>
								<button class="btn">
									<a href="<?php echo the_permalink();?>">Voir l'album photo</a>
								</button>
							</div>
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