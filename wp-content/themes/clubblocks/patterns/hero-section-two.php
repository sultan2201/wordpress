<?php

/**
 * Title: Hero section two
 * Slug: hero-section-two
 * Categories: clubblocks
 * Keywords: hero section two
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()) . '/assets/img/clubblocks.jpg'; ?>","id":21,"dimRatio":0,"minHeight":80,"minHeightUnit":"vh","contentPosition":"bottom center","isDark":false,"style":{"spacing":{"blockGap":"","padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"100vw"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:80vh">
	<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
	<img class="wp-block-cover__image-background wp-image-21" alt="" src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/clubblocks.jpg'; ?>" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0px","margin":{"top":"0px","bottom":"0px"},"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"type":"constrained","contentSize":"100vw"}} -->
		<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
			<!-- wp:columns -->
			<div class="wp-block-columns">
				<!-- wp:column {"width":"50%"} -->
				<div class="wp-block-column" style="flex-basis:50%"></div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"50%","style":{"spacing":{"padding":{"top":"3rem","right":"3vw","bottom":"3rem","left":"3vw"}}},"backgroundColor":"primary"} -->
				<div class="wp-block-column has-primary-background-color has-background" style="padding-top:3rem;padding-right:3vw;padding-bottom:3rem;padding-left:3vw;flex-basis:50%">
					<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"xsmall"} -->
					<p class="has-xsmall-font-size" style="text-transform:uppercase"><strong>Lorem ipsum</strong></p>
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
	</div>
</div>
<!-- /wp:cover -->