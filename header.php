<?php
/**
 * Header
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Interno
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Description -->
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<link rel="canonical" href="<?= esc_url(is_singular() ? get_permalink() : home_url('/')) ?>" />
	<!-- Open Graph -->
	<meta property="og:locale" content="<?= esc_attr(str_replace('_', '-', get_locale())) ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Interno" />
	<meta property="og:description" content="<?php bloginfo('description'); ?>" />
	<meta property="og:url" content="<?= esc_url(home_url('/')) ?>" />
	<meta property="og:image"
		content="<?= esc_url(get_template_directory_uri() . '/assets/img/favicon/apple-touch-icon.png'); ?>" />
	<meta property="og:image:secure_url"
		content="<?= esc_url(get_template_directory_uri() . '/assets/img/favicon/apple-touch-icon.png') ?>" />
	<meta property="og:image:width" content="180" />
	<meta property="og:image:height" content="180" />
	<meta property="og:image:alt" content="INTERNO" />
	<meta property="og:image:type" content="image/png" />
	<?php wp_head(); ?>
</head>

<body class="min-h-screen bg-gray-100" <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<!-- header -->
	<header class="sticky top-0 h-[90px] shadow-xl z-30 bg-white">
		<div class="container mx-auto flex justify-between h-full items-center">
			<!-- logo -->
			<a href="<?= esc_url(home_url('/')) ?>">
				<img src="<?= esc_url(get_field('site_logo', 'options')) ?>"
					alt="Logo of <?= esc_attr(get_bloginfo('name')) ?>" />
			</a>
			<!-- nav -->
			<nav>
				<!-- nav mobile trigger -->
				<div class="cursor-pointer lg:hidden" id="nav-trigger-btn">
					<i class="ri-menu-4-line text-4xl text-primary"></i>
				</div>
				<ul id="menu-list"
					class="fixed w-full h-0 p-0 bg-white overflow-hidden top-[90px] left-0 right-0 flex flex-col gap-5 lg:relative lg:flex-row lg:p-0 lg:top-0 lg:border-none lg:h-full transition-all duration-300">
					<?php
					if (have_rows('site_menu', 'options')):
						while (have_rows('site_menu', 'options')):
							the_row(); ?>
							<li>
								<a href="<?= esc_url(get_sub_field('site_menu_url')) ?>">
									<?= esc_html(get_sub_field('site_menu_title')) ?>
								</a>
							</li>
						<?php endwhile;
					endif;
					?>
				</ul>
			</nav>
		</div>
	</header>