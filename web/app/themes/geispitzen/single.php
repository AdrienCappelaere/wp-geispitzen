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
		<div class="width margin-main">
		<?php
		while ( have_posts() ) :

			the_post();
			$title = get_field('title');
			$description = get_field('description');
			$image = wp_get_attachment_image_src(get_field('image'), 'full');
			$gallery = get_field('galerie');
			$size = 'full';
			?>

			<?php
			if(!$gallery): ?>
					<img src="<?php echo $image[0]; ?>" alt="">
			<?php endif; ?>

			<h1 class="title-1"><?php echo $title ?></h1>
			<p class="article-txt">
				<?php echo $description ?>
			</p>
			
			<?php 
			if($gallery): ?>
				<?php echo do_shortcode( '[sliders_pack id="364"]' ); ?>
			<?php endif; ?>
			

		<?php				
		endwhile; // End of the loop.
		?>


<?php
get_footer();
