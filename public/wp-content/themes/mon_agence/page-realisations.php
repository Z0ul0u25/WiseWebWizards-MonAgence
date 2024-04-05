<?php
/*Template name: realisations */
$pageSingle = false;
$photoVedette = "http://localhost/rpni2/mon_agence/public/wp-content/images/lalacavaetreca.jpg";
$titrePage = get_the_title();
$slogan = get_the_content();
get_header(); //Appel de l'inclusion d'entête de page
// echo "page-realisations.php";
?>

<main class="page b_page" id="b_hub">
    <?php
    //Requête et boucle d'affichage des articles avec ACF
    //À mettre dans les pages utilisant les articles personnalisés et adapter****************
    $posts = get_posts(array(
        'posts_per_page' => -1,
        'post_type'    => 'realisations',
        'post_status' => 'publish',
        'orderby' => 'the_title',
        'order' => 'ASC',
    ));

    // var_dump($posts);

    if (have_posts()) {
        //tant qu'il restera des articles
    ?>
        <div id="articles">

            <?php
            foreach ($posts as $post) { ?>
                <a href="<?php the_permalink(); ?>">
                    <article class="article">
                        <?php
                        $image_info = get_field("photo_1");
                        //Si l'image est définie dans ACF
                        if ($image_info != null) {

                            //Utiliser la balise picture pour le redimensionnement de l'image
                        ?>
                            <picture>
                                <!-- <source media="(min-width: 800px)" srcset="<?php echo $image_info['sizes']["medium"]; ?>"> -->
                                <source media="(min-width: 415px)" srcset="<?php echo $image_info['sizes']["medium"]; ?>">
                                <img src="<?php echo $image_info['sizes']['thumbnail']; ?>" alt="<?php echo $image_info["alt"]; ?>">
                            </picture>

                        <?php } ?>

                        <header class="article__entete">
                                <h2 class="article__titre"><?php the_title() ?></h2>

                        </header>

                        <p><?php echo get_field("nom_client") ?></p>

                        <p class="article__texte">
                            En savoir plus
                        </p>
                    </article>
                </a>
            <?php }

            //réinitialise les données reçues par défaut du gabarit pour afficher le
            //reste des informations de la page, s'il y a lieu
            //wp_reset_postdata();
            ?>
        </div>
    <?php
    } ?>
</main>
<?php get_footer() ?>