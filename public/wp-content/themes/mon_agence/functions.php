<?php
//initialise la fonctionnalité de gestion des menus pour ce thème
if (function_exists("register_nav_menus")) {
    register_nav_menus(
        array(
            "principal" => "Menu principal",
            "secondaire" => "Menu secondaire"
        )
    );
}

if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}

//Déclaration du type d'article personnalisé des réalisations****************************
//À mettre dans le fichier functions.php et adapter en fonction du type d'article.

//Déclaration des Réalisations
function agence_realisations_custom_post() {

    //On rentre les différentes dénominations de notre article personnalisé type
    //qui seront affichées dans l'interface administrative...
    $labels = array(
        // Le nom au pluriel
        'name'                => _x('Réalisations de Mon Agence', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x('Réalisations', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __('Réalisations'),
        //Les différents libellés de l'interface administrative
        'all_items'           => __('Tous nos réalisations'),
        'view_item'           => __('Voir nos réalisations'),
        'add_new_item'        => __('Ajouter une nouvelle réalisation'),
        'add_new'             => __('Ajouter'),
        'edit_item'           => __('Editer une réalisation'),
        'update_item'         => __('Modifier une réalisation'),
        'search_items'        => __('Rechercher une réalisation'),
        'not_found'           => __('Non trouvé'),
        'not_found_in_trash'  => __('Non trouvé dans la corbeille')
    );

    //On peut définir ici d'autres options pour notre type d'article personnalisé
    $args = array(
        'label'               => __('Nos réalisations'),
        'description'         => __('Tous sur nos réalisations'),
        'labels'              => $labels,
        'supports'            => array(
            'title', 'editor', 'excerpt', 'author', 'thumbnail',
            'comments', 'revisions', 'custom-fields'
        ),
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'              => array('slug' => 'realisations')
    );

    // On enregistre notre type d'article personnalisé qu'on nomme ici "realisations" et ses arguments
    register_post_type('realisations', $args);
}

function agence_services_custom_post() {

    //On rentre les différentes dénominations de notre article personnalisé type
    //qui seront affichées dans l'interface administrative...
    $labels = array(
        // Le nom au pluriel
        'name'                => _x('Services de Mon Agence', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x('Services', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __('Services'),
        //Les différents libellés de l'interface administrative
        'all_items'           => __('Tous nos services'),
        'view_item'           => __('Voir nos services'),
        'add_new_item'        => __('Ajouter une nouvelle service'),
        'add_new'             => __('Ajouter'),
        'edit_item'           => __('Editer une service'),
        'update_item'         => __('Modifier une service'),
        'search_items'        => __('Rechercher une service'),
        'not_found'           => __('Non trouvé'),
        'not_found_in_trash'  => __('Non trouvé dans la corbeille')
    );

    //On peut définir ici d'autres options pour notre type d'article personnalisé
    $args = array(
        'label'               => __('Nos services'),
        'description'         => __('Tous sur nos services'),
        'labels'              => $labels,
        'supports'            => array(
            'title', 'editor', 'excerpt', 'author', 'thumbnail',
            'comments', 'revisions', 'custom-fields'
        ),
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'              => array('slug' => 'services')
    );

    // On enregistre notre type d'article personnalisé qu'on nomme ici "realisations" et ses arguments
    register_post_type('services', $args);
}

function agence_equipe_custom_post() {

    //On rentre les différentes dénominations de notre article personnalisé type
    //qui seront affichées dans l'interface administrative...
    $labels = array(
        // Le nom au pluriel
        'name'                => _x('Équipe de Mon Agence', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x('Équipe', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __('Équipe'),
        //Les différents libellés de l'interface administrative
        'all_items'           => __('Tous nos membres'),
        'view_item'           => __('Voir nos membres'),
        'add_new_item'        => __('Ajouter un nouveau membre'),
        'add_new'             => __('Ajouter'),
        'edit_item'           => __('Editer un membre'),
        'update_item'         => __('Modifier un membre'),
        'search_items'        => __('Rechercher un membre'),
        'not_found'           => __('Non trouvé'),
        'not_found_in_trash'  => __('Non trouvé dans la corbeille')
    );

    //On peut définir ici d'autres options pour notre type d'article personnalisé
    $args = array(
        'label'               => __('Nos membres'),
        'description'         => __('Tous sur nos membres'),
        'labels'              => $labels,
        'supports'            => array(
            'title', 'editor', 'excerpt', 'author', 'thumbnail',
            'comments', 'revisions', 'custom-fields'
        ),
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'              => array('slug' => 'membres')
    );

    // On enregistre notre type d'article personnalisé qu'on nomme ici "realisations" et ses arguments
    register_post_type('membres', $args);
}

add_action('init', 'agence_realisations_custom_post', 0);
add_action('init', 'agence_services_custom_post', 0);
add_action('init', 'agence_equipe_custom_post', 0);

//Ajout de la librairie Font Awesome pour les icons de la navigation mobile.
function wmpudev_enqueue_icon_stylesheet()
{
    wp_register_style('fontawesome', 'http:////maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
    wp_enqueue_style('fontawesome');
}

add_action('wp_enqueue_scripts', 'wmpudev_enqueue_icon_stylesheet');

