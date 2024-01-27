<?php

/**
 * Title: Hero section one
 * Slug: hero-section-one
 * Categories: clubblocks
 * Keywords: hero section one
 */
?>

<!-- wp:group {"style":{"dimensions":{"minHeight":"80vh"},"spacing":{"blockGap":"0px","padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"100vw"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="min-height:80vh;margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0px","left":"0px"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"background":{"backgroundImage":{"url":"<?php echo esc_url(get_template_directory_uri()) . '/assets/img/clubblocks.jpg'; ?>","id":21,"source":"file","title":"ClubDemo"}},"dimensions":{"minHeight":"80vh"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="min-height:80vh"></div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"bottom","style":{"spacing":{"padding":{"top":"5em","right":"5vw","bottom":"5em","left":"5vw"}}}} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="padding-top:5em;padding-right:5vw;padding-bottom:5em;padding-left:5vw">
			<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"xsmall"} -->
			<p class="has-secondary-color has-text-color has-link-color has-xsmall-font-size" style="text-transform:uppercase"><strong>Lorem ipsum</strong></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading -->
			<h2 class="wp-block-heading">Consectetur adipiscing suspendisse</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec mauris id sem pretium vestibulum. Pellentesque nec sem pretium, viverra felis eu, gravida ipsum.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button">
					<a class="wp-block-button__link wp-element-button">Nulla metus lectusa</a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->