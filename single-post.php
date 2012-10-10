<?php get_header() ?>
<?php the_post() ?>

<article <?php post_class() ?>>
	<header>
		<h1><?php the_title() ?></h1>
		<p class="date"><?php the_date() ?></p>
	</header>
	<section>
		<?php the_content() ?>
	</section>
	<section>
		<p>Comments</p>
	</section>
</article>

<?php get_footer() ?>
