<?php
get_header();
echo "single-realisation.php";
?>

<main class="page b_page" id="b_single">

	<?php the_post(); //nécessaire à the_author() et the_date()
	// var_dump($post); //Ce que reçoit la page
	?>
	<article class="article">
		<header class="article__entete">
			<h2 class="article__titre"><?php the_title() ?></h2>
		</header>


		<div class="article__top">

			<?php $image_info = get_field("photo_1"); ?>
			<img src="<?= $image_info['sizes']["thumbnail"] ?>" alt="<?= $image_info["alt"]; ?>">

			<div class="article__texte">
				<p>
					<?php the_content() ?>
				</p>
				<?php

				//Affichage de plusieurs images responsives définies dans les champs d'ACF

				//Boucler dans les champs d'images de ACF - un champ par image
				//Nommer les champs avec un numéro - photo_1, photo_2
				//Ici 3 images possibles
				for ($cpt = 2; $cpt <= 4; $cpt++) {

					//Le champ d'ACF doit être configuré pour retourner un tableau
					$image_info = get_field("photo_" . $cpt);

					//Si l'image est définie dans ACF
					if ($image_info != null) {
						//Utiliser la balise picture pour le redimensionnement de l'image
						//ici on utilise trois images personnalisées... Mais on peut utiliser thumbnail, medium, etc...
						//l'attribut sizes contient tout les formats d'image nécessaire.
				?>
						<picture>
							<source media="(min-width: 601px)" srcset="<?php echo $image_info['sizes']["medium"]; ?>">
							<img src="<?= $image_info['sizes']["thumbnail"] ?>" alt="<?= $image_info["alt"]; ?>">
						</picture>

				<?php
					}
				} ?>
			</div>
		</div>
		<p>
			<?php //Version améliorée avec flèche et titre des articles adjacents.
			the_post_navigation(array(
				'prev_text'  => __('← %title'),
				'next_text'  => __('%title →'),
			));
			?>
		</p>
		<!-- <footer class="article__piedPage">
			<h4>Par: <?php the_author(); //Attention! Nécessite un appel à the_post() avant cet affichage
						?></h4>
			<h4> Publié le: <?php the_date(); //Attention! Nécessite un appel à the_post() avant cet affichage
							?></h4>
		</footer> -->
	</article>

</main>

<?php get_footer() ?>