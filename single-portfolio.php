<?php
/**
 * Template for single portfolio view
 * @package themify
 * @since 1.0.0
 */
?>

<?php get_header(); ?>

<?php
/** Themify Default Variables
 *  @var object */
global $themify; ?>

<!-- layout-container -->
<div id="layout" class="pagewidth clearfix">

	<?php if( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<?php themify_content_before(); // hook ?>

		<!-- content -->
		<div id="content" class="list-post">
			<?php themify_content_start(); // hook ?>

			<?php get_template_part( 'includes/loop-portfolio', 'single'); ?>

			<?php wp_link_pages(array('before' => '<p><strong>' . __('Pages:', 'themify') . ' </strong>', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			<?php get_template_part( 'includes/author-box', 'single'); ?>

			<?php get_template_part( 'includes/post-nav-portfolio'); ?>

			<?php if(!themify_check('setting-comments_posts')): ?>
				<?php comments_template(); ?>
			<?php endif; ?>

			<?php themify_content_end(); // hook ?>
		</div>
		<!-- /content -->

		<?php themify_content_after(); // hook ?>

	<?php endwhile; ?>

	<?php
	/////////////////////////////////////////////
	// Sidebar
	/////////////////////////////////////////////
	if ($themify->layout != "sidebar-none"): get_sidebar(); endif; ?>

</div>
<!-- /layout-container -->
	
<?php get_footer(); ?>