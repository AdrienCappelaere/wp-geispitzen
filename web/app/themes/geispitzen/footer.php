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
				/*
				global $post;
				$post_slug = $post->post_name;
				if ($post_slug == "recrutement") {

				} else {*/	?>
				<div class="join-us">
					<div class="join-us-text">
						<h2 class="">Devenir membre</h2>
						<h3 class="">Rejoignez-nous !</h3>
						<p>Pour la saison 2020-2021, la Concordia recrute des cuivres. Vous êtes un musicien avec au moins 5 années de pratique instrumentale ? Venez nous rejoindre pour partager votre passion avec nous !</p>
						<button class="btn btn-join-us"><a href="/contact">Nous rejoindre</a></button>
					</div>
					<div class="div-join-img">
						<img src="/app/uploads/2020/03/saxophonistes.png" class="join-img" />
					</div>
					
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
