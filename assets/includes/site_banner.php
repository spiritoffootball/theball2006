<?php /*
================================================================================
Site Banner Template
================================================================================
AUTHOR: Christian Wach <needle@haystack.co.uk>
--------------------------------------------------------------------------------
NOTES

--------------------------------------------------------------------------------
*/

?><!-- assets/includes/site_banner.php -->

<div id="site_banner" class="clearfix">

	<div id="site_banner_inner">

		<?php include( get_template_directory().'/assets/includes/network.php' ); ?>

		<div id="splash">

			<a href="/wp-content/blogs.dir/7/files/2009/11/the_ball_hands_blue.jpg"><img src="/wp-content/blogs.dir/7/files/2009/11/the_ball_hands_blue-200x150.jpg" alt="The logo held aloft" title="The logo held aloft" width="200" height="150" class="alignnone size-thumbnail-200 wp-image-264" /></a>

		</div><!-- /splash -->

		<div id="banner_copy">

			<h2>Welcome to <?php bloginfo( 'title' ); if ( is_home() ) { echo ' blog'; } ?></h2>

			<p>The Ball 2006, known for the first time as <em>The Spirit of Football</em>, embodied the motto of the 2006 World Cup: <em>A Time to make Friends</em>. Its short journey to Munich brought people together in the spirit of the beautiful game.</p>

			<?php if ( ! is_home() ) { ?>
				<p id="gotoblog"><a href="/2006/blog/">Read the blog &rarr;</a></p>
			<?php } ?>

		</div><!-- /banner_copy -->

	</div><!-- /site_banner_inner -->

</div><!-- /site_banner -->



<div id="cols" class="clearfix">
<div class="cols_inner">

	<?php include( get_template_directory() . '/assets/includes/page_list.php' ); ?>



