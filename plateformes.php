<?php
/*
 Template Name: Pateformes
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

    <?php get_header(); ?>



    <main class="main main--plateformes" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

        <img src="<?php echo get_template_directory_uri(); ?>/library/images/ombre.png" alt="" class="main--plateformes__ombre">
		<style>#map {height:500px}</style>
		       
		 <div id="map"></div>
		
		<script>var mapTest = $('#map'); </script>
  


        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


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
            ?>


            <?php endwhile;
        else : ?>

            <article id="post-not-found" class="hentry cf">
                <header class="article-header">
                    <h1>
                        <?php _e('Oops, mauvaise adresse!', 'bonestheme'); ?>
                    </h1>
                </header>
                <section class="entry-content">
                    <p>
                        <?php _e('Uh Oh. Something is missing. Try double checking things.', 'bonestheme'); ?>
                    </p>
                </section>
                <footer class="article-footer">
                    <p>
                        <?php _e('This is the error message in the page-custom.php template.', 'bonestheme'); ?>
                    </p>
                </footer>
            </article>

            <?php endif; ?>
    </main>

  
  






   
    <?php get_footer(); ?>