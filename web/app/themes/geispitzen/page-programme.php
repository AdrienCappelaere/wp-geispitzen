<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Geispitzen
 */

get_header();
?>
	<div id="primary" class="content-area front-main">
		<main id="main" class="site-main">
			<div class=width>
				<?php 
					// Find todays date in Ymd format.
					$today = date('Ymd');
					// Query posts using a meta_query to compare the custom field: date_evenement.
					$event = get_posts( array(
						'post_type'      	=> 'post',
						'posts_per_page' 	=> -1,
						'category'        	=> 3,
						'orderby'			=> 'meta_value',
						'order'				=> 'ASC',
						'meta_key'			=> 'date_evenement',
						'meta_query' 		=> array(
							array(
								'key'     	=> 'date_evenement',
								'compare' 	=> '>=',
								'value'   	=> $today,
							),
						),
					));
					?>

				<h1 class="title-1">Nos événements à venir</h1>
				<?php
				if( $event ) {
					foreach( $event as $post ) {?>
					<div class="event-block">
						<?php $image = wp_get_attachment_image_src(get_field('image'), 'full'); ?>
						<div class="event-img-block" style="background-image: url('<?php echo $image[0]; ?>')"></div>
						<div class="event-content">
							<p class="event-date">
								<?php
									setlocale(LC_TIME, "fr_FR", "French");
									echo strftime('%A %d %B %G', strtotime(get_field('date_evenement')));	
								?>
								à <?php the_field('heure_event');?>
							</p>
							<h3 class="event-title"><?php the_field('title');?></h3>
							<p class="event-description"><?php the_field('description');?></p>
							<div class="flex-row">
								<span class="iconify event-icon" data-inline="false" data-icon="ic:baseline-place"></span>
								<div>
									<?php $values = get_field_object('map'); ?>
									<p class="event-adress"><?php echo $values['value']['address'];?></p>
								</div>
							</div>
							<?php $values = get_field_object('map'); ?>
							<button class="btn">
								<a target="_blank" href="https://www.google.com/maps/search/?api=1&query=<?php echo $values['value']['lat'] ?>,<?php echo $values['value']['lng'] ?>">Obtenir l'itinéraire</a>
							</button>	
						</div>
					</div>
				<?php
					}
				} else {
					?> <p>Nous n'avons pas d'événements de prévus ces prochains temps.</p> <?php
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