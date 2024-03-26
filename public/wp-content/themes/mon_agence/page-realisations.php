<?php
/*Template name: realisations */

get_header(); //Appel de l'inclusion d'entête de page
// echo "page-realisations.php";
?>

<main class="page b_page">

    <?php //var_dump($post); //Ce que reçoit la page
    ?>

    <div>
        <h1><?php the_title() //fonction native WP
            ?></h1>
    </div>
    <p>
        <?php the_content() ?>
        <?php  //echo $post->post_content;
        ?>
    </p>
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
                <article class="article">
                    <?php
                    $image_info = get_field("photo_1");
                    //Si l'image est définie dans ACF
                    if ($image_info != null) {

                        //Utiliser la balise picture pour le redimensionnement de l'image
                    ?>
                        <picture>
                            <!-- <source media="(min-width: 800px)" srcset="<?php echo $image_info['sizes']["medium"]; ?>"> -->
                            <source media="(min-width: 601px)" srcset="<?php echo $image_info['sizes']["medium"]; ?>">
                            <img src="<?php echo $image_info['sizes']['thumbnail']; ?>" alt="<?php echo $image_info["alt"]; ?>">
                        </picture>

                    <?php } ?>

                    <header class="article__entete">
                            <a class="article__lien" href="<?php the_permalink(); ?>"><h2 class="article__titre"><?php the_title() ?></h2></a>
                    </header>

                    <p><?php echo get_field("nom_client") ?></p>

                    <p class="article__texte">
                        <a href="<?php the_permalink(); ?>">En savoir plus</a>
                    </p>
                </article>
            <?php }

            //réinitialise les données reçues par défaut du gabarit pour afficher le
            //reste des informations de la page, s'il y a lieu
            //wp_reset_postdata();
            ?>
        </div>
    <?php
    } ?>
</main>
<?php get_sidebar() ?>
<?php get_footer() ?>