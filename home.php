<?php get_header() ?>

<?php while ( have_posts() ) { the_post(); ?>

	<ul>
		<li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
	</ul>

<?php } ?>

<?php get_footer() ?>
