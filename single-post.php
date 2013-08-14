<?php get_header() ?>
<?php the_post() ?>

<article <?php post_class() ?>>
	<header>
		<h1><?php the_title() ?></h1>
		<p class="date"><?php the_date() ?></p>
	</header>
	<section class="body">
		<?php the_content() ?>
	</section>
	<section class="comments">
		<!-- <p>Comments</p> -->
	</section>
</article>

<?php get_footer() ?>
