<?php

/**
 * Title: Content section four
 * Slug: content-section-four
 * Categories: clubblocks
 * Keywords: content section four
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem"}},"color":{"background":"#edcbbf"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#edcbbf;padding-top:5rem;padding-bottom:5rem">
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading -->
			<h2 class="wp-block-heading">Consectetur adipiscing<br>suspendisse quisque</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec mauris id sem pretium vestibulum. Pellentesque nec sem pretium, viverra felis eu, gravida ipsum. Quisque sed porttitor mi, finibus ultricies nisl.</p>
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

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"id":21,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full">
				<img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/clubblocks.jpg'; ?>" alt="" class="wp-image-21"/>
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->