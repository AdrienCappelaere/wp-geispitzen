<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Geispitzen
 */

get_header();

$accueil = get_posts( array(
    'post_type'      	=> 'page',
    'id'        	    => 348,
));

$imagehero = wp_get_attachment_image_src(get_field('image_de_fond'), 'full');
$imageorchestre = wp_get_attachment_image_src(get_field('image_de_lorchestre'), 'large');

?>
	<div id="primary" class="content-area front-main">
		<main id="main" class="site-main">
			<div class="hero-bg hero-spacing" style="background-image: url(<?php echo $imagehero[0]; ?>),linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 5), black)">
				<div class="flex-column-center">
					<h2 class="title-1 hero-color">Bienvenue sur notre site</h2>
					<div class="flex-column-center">
						<h1 class="title-1 hero-color underline-blue">Musique</h1>
						<h1 class="title-1 hero-color underline-blue">Concordia de</h1>
						<h1 class="title-1 hero-color underline-blue">Geispitzen</h1>
					</div>
					<p class="hero-color hero-txt-spacing">« Être là où on ne nous attend pas, pour le plaisir des musiciens et du public. »</p>
				</div>
			</div>
			<div class=width>
				<h2>L'orchestre</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu pellentesque mollis aliquet faucibus nibh a enim faucibus ullamcorper. Cursus ac euismod commodo morbi massa eu. Non morbi neque, pellentesque egestas duis. Auctor vulputate sem ullamcorper aliquam. Tincidunt donec volutpat pharetra, eget massa.</p>
				<img src="<?php echo $imageorchestre[0]; ?>" alt="" style="box-shadow:0px 10px 24px rgba(0, 0, 0, 0.15); margin-top:1rem;">
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
							),),));?>

				<h2 class="">Nos événements à venir</h2>
				<?php
				if( $event ) {
					foreach( $event as $post ) {?>
					<div class="event-block">
						<?php $image = wp_get_attachment_image_src(get_field('image'), 'large'); ?>
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

				<?php 
					// Query posts using a meta_query to compare the custom field: date_evenement.
					$news = get_posts( array(
						'post_type'      	=> 'post',
						'posts_per_page' 	=> -1,
						'category'        	=> 2,
						'order'				=> 'ASC',
					));
					?>
					
				<h2 class="">Nos actualités</h2>
				<?php
					if( $news ) {
						foreach( $news as $post ) {?>
						<div class="event-block">
							<?php $image = wp_get_attachment_image_src(get_field('image'), 'large'); ?>
							<div class="event-img-block" style="background-image: url('<?php echo $image[0]; ?>')"></div>
							<div class="event-content">
								<p class="event-date">
									<?php
										$the_date = get_post_time( get_option( 'date_format' ), false, $post, true );
										echo $the_date;	
									?>
								</p>
								<h3 class="event-title"><?php the_field('title');?></h3>

								<div class="event-description">
									<?php echo custom_field_excerpt();?>
								</div>
								<button class="btn">
									<a href="<?php echo the_permalink();?>">Lire l'actualité</a>
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