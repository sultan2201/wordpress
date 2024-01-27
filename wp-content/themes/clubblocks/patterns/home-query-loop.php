<?php

/**
 * Title: Home query loop
 * Slug: home-query-loop
 * Categories: clubblocks
 * Keywords: home query loop
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem"},"margin":{"top":"0px","bottom":"0px"}},"color":{"background":"#f3f3f3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#f3f3f3;margin-top:0px;margin-bottom:0px;padding-top:5rem;padding-bottom:5rem">
	<!-- wp:heading {"textAlign":"center"} -->
	<h2 class="wp-block-heading has-text-align-center">Our blog</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam iaculis accumsan leo et imperdiet.</p>
	<!-- /wp:paragraph -->

	<!-- wp:query {"queryId":30,"query":{"perPage":"6","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"layout":{"type":"default"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
			<!-- wp:post-featured-image {"isLink":true} /-->

			<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between"}} -->
			<div class="wp-block-group">
				<!-- wp:post-author {"showAvatar":false,"showBio":false} /-->

				<!-- wp:post-date {"isLink":true} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:post-title {"isLink":true} /-->

			<!-- wp:post-excerpt /-->
		<!-- /wp:post-template -->


		<!-- wp:query-pagination -->
			<!-- wp:query-pagination-previous /-->

			<!-- wp:query-pagination-numbers /-->

			<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
			<p>No messages were found.</p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->