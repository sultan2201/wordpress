<?php

/**
 * Title: Post Query Loop
 * Slug: post-query-loop
 * Categories: clubblocks
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem"},"margin":{"top":"0px","bottom":"0px"}},"color":{"background":"#f3f3f3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#f3f3f3;margin-top:0px;margin-bottom:0px;padding-top:5rem;padding-bottom:5rem">
	<!-- wp:query {"queryId":30,"query":{"perPage":"6","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
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
	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->