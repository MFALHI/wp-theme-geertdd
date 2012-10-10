<!doctype html>
<html <?php language_attributes() ?>>
<head>

	<meta charset="utf-8">
	<title><?php wp_title() ?></title>

	<?php wp_head() ?>

</head>
<body <?php body_class() ?>>

	<header>
		<?php if (is_front_page()) { ?>
			<h1>GeertDeDeckere.be</h1>
		<?php } else { ?>
			<p><a href="<?php bloginfo('url') ?>">GeertDeDeckere.be</a></p>
		<?php } ?>
	</header>
