<?php
/*Template name: equipe */
$pageSingle = false;
$slogan = "";
get_header(); //Appel de l'inclusion d'entête de page
echo "page-equipe.php";
?>

<main class="page">

	<div>
		<h2><?php the_title() //fonction native WP ?></h2>
	</div>
	<p>
		<?php the_content() ?>
	</p>
	<p>Rencontrez nos Wizards!</p>
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
		<a href="<?php the_permalink(); ?>">
			<img src="<?php echo get_field("photo_pageEquipe")['sizes']['medium']; ?>" alt="<?php echo $image_info["alt"]; ?>">
			<p><?php echo get_field("nom_membre") ?></p>
			<p><?php echo get_field("fonction_membre") ?></p>
			<hr>
			<p><?php echo get_field("manda") ?></p>
	
		</a>
	<?php } }?>
</main>
<?php get_sidebar() ?>
<?php get_footer() ?>