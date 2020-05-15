<?php

/**
 * event Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'event-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'event';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


setlocale(LC_TIME, "fr_FR", "French");

// Load values and assign defaults.
$title = get_field('title') ?: 'Titre de l\'événement...';
$date = strftime('%A %d %B %G', strtotime(get_field('date'))) ?: '01 Janvier 1970' ;
$heure = get_field('heure') ?: '12:00';
$description = get_field('description') ?: 'Description de l\'événement...';
$image = wp_get_attachment_image_src(get_field('image'), 'full') ?: 103;
$adresse = get_field_object('map');


?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className) . "-block" ?>">
    <div class="event-img-block" style="background-image: url('<?php echo $image[0]; ?>')"></div>
    <div class="event-content">
        <p class="event-date"> <?php echo $date; ?> à <?php echo $heure;?></p>
        <h3 class="event-title"><?php echo $title;?></h3>
        <p class="event-description"><?php echo $description;?></p>
        <div class="flex-row">
            <span class="iconify event-icon" data-inline="false" data-icon="ic:baseline-place"></span>
            <div>
                <p class="event-adress"><?php echo $adresse['value']['address'];?></p>
            </div>
        </div>
        <button class="btn">
            <a target="_blank" href="https://www.google.com/maps/search/?api=1&query=<?php echo $adresse['value']['lat'] ?>,<?php echo $adresse['value']['lng'] ?>">Obtenir l'itinéraire</a>
        </button>	
    </div>
</div>

<!-- LIEN DE CLASSES CSS
    event-block = event
    