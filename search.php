<?php get_header(); ?>




<div id="inner-content" class="wrap cf searchpage">

	<main id="main" class=" cf container" role="main">
		<h1 class="archive-title col-sm-8 col-sm-offset-2"><span><?php _e( 'Search Results for:', 'bonestheme' ); ?></span> <?php echo esc_attr(get_search_query()); ?></h1>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('cf col-sm-8 col-sm-offset-2'); ?> role="article">

				<header class="entry-header article-header">

					<h3 class="search-title entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

					<p class="byline entry-meta vcard">
						<?php printf( __( 'Posted %1$s by %2$s', 'bonestheme' ),
							/* the time the post was published */
							'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
							/* the author of the post */
							'<span class="by">by</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
						); ?>
					</p>

				</header>

				<section class="entry-content">

				</section>


			</article>

		<?php endwhile; ?>


		<?php else : ?>

			<article id="post-not-found" class="hentry cf">
				<header class="article-header">
					<h1><?php _e( 'Sorry, No Results.', 'bonestheme' ); ?></h1>
				</header>
				<section class="entry-content">
					<p><?php _e( 'Try your search again.', 'bonestheme' ); ?></p>
				</section>
				<footer class="article-footer">
					<p><?php _e( 'This is the error message in the search.php template.', 'bonestheme' ); ?></p>
				</footer>
			</article>

		<?php endif; ?>

	</main>


</div>



<?php get_footer(); ?>
