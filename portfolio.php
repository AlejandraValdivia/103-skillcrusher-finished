<?php
/**
 * The template for displaying pages
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */

get_header(); ?>

<section class="default-page">
	<div class="main-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<h2 class="entry-title"><?php the_title(); ?></h2>
			<div class="portfolio-section">
			if ( function_exists( 'envira_gallery' ) ) { envira_gallery( '47340', 'slug' ); }
        <figure class="portfolio-img"><a href="<?php the_permalink(); ?>"></a>/figure>
				<?php the_content(); ?>
			</div>
		<?php endwhile; ?>
	</div>

	<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>
