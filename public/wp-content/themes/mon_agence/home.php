<?php
// include "header.php";
$pageSingle = false;
$slogan = "Wise Web Wizards – Où la magie rencontre le web pour créer des expériences transcendantales.";
$titrePage = "Ouvrons ensemble
les portes de
l'enchantement 
digital.";
get_header();
?>
<main class="a_page">
	<?php //si la page reçoit des articles
	echo "home.php";
	// if(have_posts()){
	//tant qu'il restera des articles
	while (have_posts()) {
		//passer à l'article suivant
		the_post(); ?>
		<article class="article">
			<header class="article__entete">
				<h2 class="article__titre">
					<?php //affiche le lien et le titre de l'article'
					?>
					<a class="article__lien" href="<?php the_permalink(); ?>"><?php the_title() ?></a>
				</h2>
			</header>
			<p class="article__texte">
				<?php //affiche le texte de l'article
				the_content();
				?>
			</p>
			<?php if (has_post_thumbnail()) { ?>
				<div class="article__imageUne">
					<?php the_post_thumbnail("medium"); ?>
				</div>
			<?php } ?>
		</article>
	<?php } //}
	?>
</main>
<?php

get_sidebar();
get_footer();
?>