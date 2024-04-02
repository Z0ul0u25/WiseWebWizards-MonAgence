<?php
/*Template name: equipe */
$pageSingle = false;
$titrePage = get_the_title();
$slogan = get_the_content();
get_header(); //Appel de l'inclusion d'entête de page
?>

<main class="c_page">
	<p class="c_h2">Rencontrez nos Wizards!</p>

	<div class="c_groupeArticle">
	<?php
	//Requête et boucle d'affichage des articles avec ACF
	//À mettre dans les pages utilisant les articles personnalisés et adapter****************
	$posts = get_posts(array(
		'posts_per_page' => -1,
		'post_type'    => 'membres',
		'post_status' => 'publish',
		'orderby' => 'the_title',
		'order' => 'ASC',
	));

	// var_dump($posts);
	
	if (have_posts()) {
		//tant qu'il restera des articles
		foreach ($posts as $post) { ?>
		<div class="c_article">
			<a href="<?php the_permalink(); ?>">
				<img class="c_articleHat" src="<?php echo get_template_directory_uri()?>/liaisons/images/WizardHat.svg" alt>
				<img class="c_articleImg" src="<?php echo get_field("photo_pageEquipe")['sizes']['medium']; ?>" aria-labelledby="c_articleNom">
				<div class="c_figcaption">
					<p id="c_articleNom" class="c_articleNom"><?php echo get_field("nom_membre") ?></p>
					<p class="c_articleFonction"><?php echo get_field("fonction_membre") ?></p>
					<hr>
					<p class="c_articleManda"><?php echo get_field("manda") ?></p>
				</div>
			</a>
		</div>
	<?php } }?>
	</div>
</main>
<?php get_sidebar() ?>
<?php get_footer() ?>