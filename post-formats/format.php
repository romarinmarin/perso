<?php
/*
 * This is the default post format.
 *
 * So basically this is a regular post. if you don't want to use post formats,
 * you can just copy ths stuff in here and replace the post format thing in
 * single.php.
 *
 * The other formats are SUPER basic so you can style them as you like.
 *
 * Again, If you want to remove post formats, just delete the post-formats
 * folder and replace the function below with the contents of the "format.php" file.
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('cf article'); ?> role="article" itemscope itemprop="blogPost"
         itemtype="http://schema.org/BlogPosting">
    <div class="container-inner">
        <header class="article__header entry-header">

            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/library/images/cross.svg" alt=""></a>
            <h1 class="entry-title article__header__title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>

            <p class="byline entry-meta vcard">

                <?php printf(__('du', 'bonestheme') . ' %1$s %2$s',
                    /* the time the post was published */
                    '<time class="article__header__date entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                    /* the author of the post */
                    '<span class="by"></span>'
                ); ?>

            </p>

        </header> <?php // end article header ?>

        <section class="entry-content article__content cf" itemprop="articleBody">
            <?php
            // the content (pretty self explanatory huh)
            the_content();

            /*
             * Link Pages is used in case you have posts that are set to break into
             * multiple pages. You can remove this if you don't plan on doing that.
             *
             * Also, breaking content up into multiple pages is a horrible experience,
             * so don't do it. While there are SOME edge cases where this is useful, it's
             * mostly used for people to get more ad views. It's up to you but if you want
             * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
             *
             * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
             *
            */

             if ($thumbnail_id = get_post_thumbnail_id()) {
                if ($image_src = wp_get_attachment_image_src($thumbnail_id, 'thumb-600')) ?>

                    <img src="<?php printf($image_src[0]); ?>" alt=""
                                                               class="img-post">
            <?php }

            echo do_shortcode("[apss_share]");

            ?>


            <?php

            wp_link_pages(array(
                'before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'bonestheme') . '</span>',
                'after' => '</div>',
                'link_before' => '<span>',
                'link_after' => '</span>',
            ));
            ?>

        </section> <?php // end article section ?>



        <?php //comments_template(); ?>

    </div>

</article> <?php // end article ?>
