<?php

/**
 * Title: Hero section three
 * Slug: hero-section-three
 * Categories: clubblocks
 * Keywords: hero section three
 */
?>


<!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()) . '/assets/img/clubblocks.jpg'; ?>","id":21,"dimRatio":30,"focalPoint":{"x":0.5,"y":0.5},"minHeight":80,"minHeightUnit":"vh","contentPosition":"bottom center","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem"}}},"layout":{"type":"constrained","wideSize":""}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="padding-top:5rem;padding-bottom:5rem;min-height:80vh">
	<span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim"></span>
	<img class="wp-block-cover__image-background wp-image-21" alt="" src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/clubblocks.jpg'; ?>" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"style":{"dimensions":{"minHeight":""}},"layout":{"type":"constrained","justifyContent":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:columns {"verticalAlignment":"bottom"} -->
			<div class="wp-block-columns are-vertically-aligned-bottom">
				<!-- wp:column {"verticalAlignment":"bottom"} -->
				<div class="wp-block-column is-vertically-aligned-bottom">
					<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"xsmall"} -->
					<p class="has-xsmall-font-size" style="text-transform:uppercase"><strong>Lorum ipusm</strong></p>
					<!-- /wp:paragraph -->

					<!-- wp:heading -->
					<h2 class="wp-block-heading">Consectetur adipiscing<br>suspendisse quisque</h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec mauris id sem pretium vestibulum. Pellentesque nec sem pretium, viverra felis eu, gravida ipsum.</p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"textColor":"base","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}}} -->
						<div class="wp-block-button">
							<a class="wp-block-button__link has-base-color has-text-color has-link-color wp-element-button">Nulla metus lectusa</a>
						</div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"bottom"} -->
				<div class="wp-block-column is-vertically-aligned-bottom"></div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->