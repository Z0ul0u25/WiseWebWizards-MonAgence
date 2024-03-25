<DOCTYPE html>
    <?php $titrePage = "Ouvrons ensemble les portes de l'enchantement digital.";
    ?>
    <html <?php language_attributes(); ?>>

    <head>
        <title><?php bloginfo('name');
                if (is_home() || is_front_page()) { ?>
                | <?php bloginfo("description");
                } else { ?>
                | <?php wp_title("", true);
                } ?>
        </title>
        <meta charset='<?php bloginfo("charset") ?>'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/liaisons/css/styles.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <?php wp_head(); ?>
    </head>

    <body>
        <header class="entete">
            <?php if (has_nav_menu("principal")) { ?>
                <nav id="principal " class="menu__principal">
                    <div id="hamburgerlogo">
                        <span></span>
                    </div>
                    <div class="nav-principale">
                        <?php wp_nav_menu(array("theme_location" => "principal")); ?>
                    </div>
                </nav>
            <?php } ?>
            <h1 class="entete__titre"><?php echo $titrePage ?></h1>
            <h2 class="entete__slogan"><?php bloginfo("description") ?></h2>
        </header>
        <div class="contenu">