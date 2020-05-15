<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Geispitzen
 */

get_header();

global $post;

?>

<div id="primary" class="content-area front-main">
	<main id="main" class="site-main">
		<div class="width margin-main"> <?php

if ( post_password_required( $post ) ) {
    // we will show password form here
    echo get_the_password_form();
} else {
            $espacemembres = get_posts( array(
                'post_type'      	=> 'page',
                'id'        	    => 144,
            ));
            ?>
            <h1 class="title-1 ">Espace membres</h1>
            <h2>Toutes les informations pour les membres de l'orchestre de Geispitzen !</h2>
            <h3>Tableau des présences</h3>
            <div class="iframe-container">
                <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTXi-d0QufvlLxWuI25oTE88qxcbFA9LFpkXx25y-p4Ib69SBuLG8uVbtVkhdUpP15hGjyeF5zwcfER/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>
            <h3 class="">Programme des répétitions</h3>
            <?php
            if( have_rows('repeteur_repetition')):
                $today = date('d/m/Y',strtotime("-1 days"));
                while( have_rows('repeteur_repetition') ): the_row();
                        $date = get_sub_field('date_repetition');
                        if ($date <= $today):
                        else:
                        $content = get_sub_field('programme_repetition');
                        ?>
                        <div class="event-block">
                            <div class="event-content">
                                <p class="event-date">
                                    <?php
                                    $the_date = get_post_time( get_sub_field('date_repetition'), false, $post, true );
                                    echo $the_date;
                                    ?>
                                </p>
                                <div class="event-description">
                                    <?php echo $content?>
                                </div>
                            </div>
                        </div>
                        <?php endif;
                endwhile;
            endif;
} ?>

<!-- 
	Ne pas fermer, balises présentes dans get_footer();
			</div>
		</main>	#main
	</div>	#primary
-->

<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Geispitzen
 */
?>

					
				</div>
				<?php // } ?>
			</div>
			<!-- _________________________________________ -->

		</main><!-- #main -->
	</div><!-- #primary -->

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info width">
			<div>
				<h2 class="title-site title-footer underline-blue">Musique</h2><br>
				<h2 class="title-site title-footer underline-blue">Concordia de</h2><br>
				<h2 class="title-site title-footer underline-blue">Geispitzen</h2>
				<p class="footer-txt">Tous droits réservés. Site réalisé par <a target="_blank" href="https://www.linkedin.com/in/capdrien/">Adrien Cappelaere</a></p>
			</div>
			<div class="fb-page" data-href="https://www.facebook.com/Musique-Concordia-de-Geispitzen-505504082985406/" data-tabs="" data-width="500px" data-height=""  data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" data-hide-cta="true">
					<blockquote cite="https://www.facebook.com/Musique-Concordia-de-Geispitzen-505504082985406/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Musique-Concordia-de-Geispitzen-505504082985406/">Musique Concordia de Geispitzen</a>
					</blockquote>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v6.0&appId=269014767442144&autoLogAppEvents=1"></script>

<script type="text/javascript">
  var el = document.createElement('script');
      el.setAttribute('src', 'https://static.axept.io/sdk.js');
      el.setAttribute('type', 'text/javascript');
      el.setAttribute('async', true);
      el.setAttribute('data-id', '5e962a1afe5be55dadba360b');
      el.setAttribute('data-cookies-version', 'concordia-base');
  if (document.body !== null) {
    document.body.appendChild(el);
  }
</script>

</body>
</html>
