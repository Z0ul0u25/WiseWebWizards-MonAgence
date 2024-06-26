<?php
$pageSingle = true;
get_header();
?>

<main class="c_page">

	<?php the_post(); //nécessaire à the_author() et the_date()
	// var_dump($post); //Ce que reçoit la page
	?>
	<article class="c_membres">
		<header class="c_membresEntete">
			<h2 id="nom_membre" class="c_h2"><?php the_title() ?></h2><span><?php echo get_field("fonction_membre") ?></span>
		</header>
		<div class="c_membresBody">
			<img src="<?php echo get_field('photo_pageMembre')['sizes']['large'];?>" aria-labelledby="nom_membre">
			<p><?php echo get_field('biographie_membre') ?></p>
		</div>
		<footer class="c_membresFooter">
    	<?php
        the_post_navigation( array(
        'prev_text'  => __( "%title" ),
        'next_text'  => __( "%title" ),
        ) );
      ?>
		</footer>
	</article>

</main>

<?php get_footer() ?>