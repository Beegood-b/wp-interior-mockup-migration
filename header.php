<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
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
	<?php wp_head(); ?>
</head>

<body class="min-h-screen bg-gray-100" <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<!-- header -->
	<header class="sticky top-0 h-[90px] shadow-xl z-30 bg-white">
		<div class="container mx-auto flex justify-between h-full items-center">
			<!-- logo -->
			<a href="<?php home_url(); ?>">
				<img src="<?php echo esc_url(get_field('site_logo', 'options')); ?>" alt="logo-image" />
			</a>
			<!-- nav -->
			<nav>
				<!-- nav mobile trigger -->
				<div class="cursor-pointer lg:hidden" id="nav-trigger-btn">
					<i class="ri-menu-4-line text-4xl text-primary"></i>
				</div>
				<ul id="menu-list"
					class="fixed w-full h-0 p-0 bg-white overflow-hidden top-[90px] left-0 right-0 flex flex-col gap-5 lg:relative lg:flex-row lg:p-0 lg:top-0 lg:border-none lg:h-full transition-all duration-300">
					<?php if (get_field('site_menu', 'options')): ?>
						<?php while (has_sub_field('site_menu', 'options')): ?>
							<li>
								<a
									href="<?php echo esc_url(get_sub_field('site_menu_url')); ?>"><?php echo esc_html(get_sub_field('site_menu_title')); ?></a>
							</li>
						<?php endwhile; ?>
					<?php endif; ?>
				</ul>
			</nav>
		</div>
	</header>