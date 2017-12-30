<?php
/*
 Template Name: Accuei
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


    <main class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
        <section class="about cblock">
            <div class="container">
                <div class="cblock__inner">
                    <div class="cblock__inner__content">
                        <h1 class="cblock__inner__content__title">Intégrateur et Développeur web javascript, angular 4 et wordpress</h1>
                        <p class="cblock__inner__content__text">
                            Bonjour, je suis Romaric Anquetil et développeur front end en freelance sur Rennes.
                            <br>Je suis disponible pour vos projets, n’hésitez pas à me contacter
                        </p>
                        <button class="cblock__inner__content__btn btn">
                            <a href="#contact">Contactez moi</a>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="nskills" id="services">
            <div class="container">
                <div class="nskills__inner">
                    <h2 class="tblock__title nskills__inner__title">
                        mes services
                    </h2>
                    <h3 class="tblock__subtitle nskills__inner__subtitle">
                        Une idée de ce que je peux vous aider à realiser
                    </h3>
                    <div class="">
                        <div class="col-sm-4">
                            <div class="nskills__inner__item">
                                <div class="nskills__inner__item__content">
                                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/icons8-javascript-filled-50.png" alt="" class="nskills__inner__item__content__img">
                                    <h2 class="nskills__inner__item__content__title">Dévelopement Front end</h2>
                                    <p class="nskills__inner__item__content__text">Je développe des sites et applications en utilisant toutes les technologies modernes,
                                        et en particulier en javascript avec Angular 4 / ES2017, SCSS / git etc. De plus
                                        j'aime le challenge et je suis donc ouvert à d'autres univers
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="nskills__inner__item">
                                <div class="nskills__inner__item__content">
                                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/icons8-iphone-x-50.png" alt="" class="nskills__inner__item__content__img">
                                    <h2 class="nskills__inner__item__content__title">Responsive Design</h2>
                                    <p class="nskills__inner__item__content__text">Tous mes sites sont responsives, c'est à dire que s'adapteront toujours à la taille de
                                        l’écran sur lequel ils sont consultés, offrant ainsi une parfaite expérience pour
                                        les utilisateurs mais aussi un meilleur résultat dans les moteurs de recherches
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="nskills__inner__item">
                                <div class="nskills__inner__item__content">
                                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/icons8-wordpress-50 (1).png" alt="" class="nskills__inner__item__content__img">
                                    <h2 class="nskills__inner__item__content__title">Dévelopement Wordpress</h2>
                                    <p class="nskills__inner__item__content__text">Je réalise des thèmes Wordpress sur mesure ainsi que des nouvelles fonctionnalités à
                                        la plateforme Wordpress, en développant des plugins. Je peux également modifier des
                                        plugin existants, pour qu'ils répondent entièrement à vos besoins
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="col-sm-4">
                            <div class="nskills__inner__item">
                                <div class="nskills__inner__item__content">
                                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/icons8-google-web-search-50.png" alt="" class="nskills__inner__item__content__img">
                                    <h2 class="nskills__inner__item__content__title">Référencement SEO</h2>
                                    <p class="nskills__inner__item__content__text">Lorsque je développe un site, je garde toujours à l'esprit le référencement. Ainsi je
                                        respecte toutes les bonnes pratiques, toutes mes pages sont donc optimisés pour assurer
                                        un référencement de qualité et un bon positionnement dans les moteurs de recherches
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="nskills__inner__item">
                                <div class="nskills__inner__item__content">
                                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/icons8-cloud-filled-50.png" alt="" class="nskills__inner__item__content__img">
                                    <h2 class="nskills__inner__item__content__title">Hébergement & nom de domaine</h2>
                                    <p class="nskills__inner__item__content__text">Je m'occupe entièrement de la gestion de votre hébergement ainsi que votre nom de domaine.
                                        je pourrai également vous conseiller quant au choix de ses derniers afin qu'ils puisses
                                        combler vos attentes
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="nskills__inner__item">
                                <div class="nskills__inner__item__content">
                                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/icons8-support-50.png" alt="" class="nskills__inner__item__content__img nskills__inner__item__content__img--support">
                                    <h2 class="nskills__inner__item__content__title">Maintenance & support</h2>
                                    <p class="nskills__inner__item__content__text">Je propose des offres de maintenance qui dépendront de l'ampleur de votre projet. J'assure
                                        également un support à mes clients lorsque je leur livre un projet, qui comprends
                                        les mise à jours, mais aussi les formations à l'utilisation du site
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="available cblock">
            <div class="container">
                <div class="cblock__inner">
                    <div class="cblock__inner__content">
                        <h2 class="cblock__inner__content__title">Disponible !</h1>
                            <p class="cblock__inner__content__text">
                                Sur Rennes, en Ille et Vilaine, en Bretagne, ou même ailleurs. Je peux me déplacer dans vos bureaux ou bien travailler à
                                distance. Je suis habitué à travailler en collaboration donc je peux facilement rejoindre
                                une équipe pour leur apporter mon aide.
                            </p>
                            <button class="cblock__inner__content__btn btn">
                                <a href="#contact">Contactez moi</a>
                            </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="xp" id="apropos">
            <div class="container">
                <div class="xp__inner">
                    <div class="row">
                        <div class="xp__inner__content col-sm-8">
                            <h2 class="tblock__title xp__inner__title">besoins de mes services ?</h2>
                            <h3 class="tblock__subtitle xp__inner__subtitle">Je suis disponible sur Rennes</h2>
                                <div class="xp__inner__text">
                                    <p>La conception, la réflexion, l’atteinte d’un résultat et la curiosité, voilà ce qui me
                                        caractérise </p>
                                    <p>Après quelques expériences en web-marketing puis 3 ans passé en tant que développeur
                                        web à Rennes au seins de l’Agence-Autrement, je comprends entièrement les enjeux
                                        et les problématiques d'un projet de création de site internet.</p>
                                    <p>Durant ses années je m’occupais du suivi et de la réalisation de site web, de la maintenance
                                        ainsi que de la formation des clients. Petits projets ou de plus grandes envergures,
                                        je suis donc malléable quant à vos besoins. Désormais développeur et intégrateur
                                        web en Freelance, je souhaite mettre toutes mes compétences au service de votre projet.
                                    </p>
                                </div>
                        </div>
                        <div class="xp__inner__img col-sm-4">
                            <img src="<?php echo get_template_directory_uri(); ?>/library/images/romaric-anquetil-developpeur-web.png" title="développeur-web-rennes"
                                alt="développeur-web-rennes">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="projects" id="projets">
            <div class="container">
                <div class="projects__inner">
                    <h2 class="tblock__title projects__inner__title">
                        mes projets
                    </h2>
                    <h3 class="tblock__subtitle projects__inner__subtitle">
                        Quelques projets réalisés dernièrements
                    </h3>
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="projects__inner__item">
                                <div class="projects__inner__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/integrateur-web.png" title="intégrateur-web-rennes"
                                        alt="intégrateur-web-rennes" class="">
                                    <div class="projects__inner__overlay">
                                        <h3>Mission Locale</h3>
                                        <p class="projects__inner__overlay__desc">Développement du site web de la Mission Locale de Rennes. Mise en place de formulaire
                                            d'inscriptions, d'agenda, et d'autres outils facilitants le quotidien des utilisateurs</p>
                                        <p class="projects__inner__overlay__agence">Réalisé au seins
                                            <a target="_blank" href="http://autrement.bzh">l'agence-autrement</a>
                                        </p>
                                        <a target="_blank" href="http://mlrennes.org/" class="projects__inner__overlay__btn btn">Voir le site</a>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="projects__inner__item">
                                <div class="projects__inner__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/developper-rennes.png" alt="webmaster-rennes" title="webmaster-rennes"
                                        class="">
                                    <div class="projects__inner__overlay">
                                        <h3>OSB</h3>
                                        <p class="projects__inner__overlay__desc">Refonte du site internet de l'OSB (l'Orchestre Symphonique de Bretagne), avec agenda,
                                            détails des differents programmes et artistes, etc.</p>
                                        <p class="projects__inner__overlay__agence">Réalisé au seins
                                            <a target="_blank" href="http://autrement.bzh">l'agence-autrement</a>
                                        </p>
                                        <a target="_blank" href="http://o-s-b.fr/" class="projects__inner__overlay__btn btn">Voir le site</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </main>

    <?php get_footer(); ?>