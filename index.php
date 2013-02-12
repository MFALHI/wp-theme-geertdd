<?php get_header() ?>

<?php while ( have_posts() ) { the_post(); ?>

	<article <?php post_class() ?>>
		<h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
		<?php the_content() ?>
	</article>

<?php } ?>

<?php get_footer() ?>
