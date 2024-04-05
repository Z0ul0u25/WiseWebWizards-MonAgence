<?php
// include "header.php";
$photoVedette = "http://localhost/rpni2/mon_agence/public/wp-content/uploads/2024/04/fond-accueil-scaled.jpg";
$pageSingle = false;
$slogan = get_bloginfo("description");
$titrePage = "Ouvrons ensemble
les portes de
l'enchantement 
digital.";
get_header();
?>
<main class="a_page">
    <div class="nouvelles">
        <h2 class="titre_nouvelles">Nouvelles</h2>
        <div class="wrap">
            <?php //si la page reçoit des articles
            // if(have_posts()){
            //tant qu'il restera des articles
            while (have_posts()) {
            //passer à l'article suivant
            the_post(); ?>
            <article class="article">
                <header class="article__entete">
                    <h2 class="article__titre">
                        <a class="article__lien" href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                    </h2>
                    <?php if (has_post_thumbnail()) { ?>
                        <div class="article__imageUne">
                            <?php the_post_thumbnail("medium"); ?>
                        </div>
                    <?php } ?>
                </header>
                <div class="article__texte">
                    <?php //affiche le texte de l'article
                    the_content();
                    ?>

                    <div class="article__savoirplus">
                        <a class="hyperlien" href="<?php the_permalink(); ?>">En savoir plus</a>
                    </div>
                </div>
            </article>

        <?php } //}
        ?></div>
    </div>
    <div class="realisation">
            <h2 class="titre_realisation">Réalisations</h2>
            <h3 class="h3">Envie d’en apprendre plus sur notre travail et nos réalisations ?</h3>
        <div class="wrap">
            <?php
            $postsRealisation = get_posts(array(
                'posts_per_page' => 2,
                'post_type'    => 'realisations',
                'post_status' => 'publish',
                'orderby' => 'the_title',
                'order' => 'ASC',
            ));
            foreach ($postsRealisation as $post) { ?>
                <div class="wrap2">
                    <article class="article">
                        <header class="article__entete">
                            <a class="article__lien" href="<?php the_permalink(); ?>"><h3
                                        class="article__titre"><?php the_title() ?></h3></a>
                            <p><?php echo get_field("nom_client") ?></p>
                        </header>

                        <div class="article__texte">
                            <?php //affiche le texte de l'article
                            the_content();
                            ?>
                        </div>
                        <div class="article__savoirplus">
                            <a class="hyperlien" href="<?php the_permalink(); ?>">En savoir plus</a>
                        </div>
                    </article>
                    <?php
                    $image_info = get_field("photo_1");
                    if ($image_info != null) {
                        ?>
                        <picture class="article__image">
                            <!-- <source media="(min-width: 800px)" srcset="<?php echo $image_info['sizes']["medium"]; ?>"> -->
                            <source media="(max-width: 600px)" srcset="<?php echo $image_info['sizes']["medium"]; ?>">
                            <img src="<?php echo $image_info['sizes']['thumbnail']; ?>"
                                 alt="<?php echo $image_info["alt"]; ?>">
                        </picture>
               </div>
                <?php } ?>

            <?php } ?>
        </div>
        <div class="lien__realisation">
            <a href="">Toutes nos réalisations</a>
        </div>
    </div>
</main>
<?php
//get_sidebar();
get_footer();
?>