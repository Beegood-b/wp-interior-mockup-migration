<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Interno
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('container mx-auto bg-[#f1f1f1] shadow-lg rounded-2xl mt-[100px] p-10 my-10'); ?>>
	<header class="entry-header mb-4">
		<?php if ( is_singular() ) : ?>
			<h1 class="entry-title text-4xl font-bold"><?php the_title(); ?></h1>
		<?php else : ?>
			<h2 class="entry-title text-3xl font-semibold">
				<a class="hover:underline text-blue-600" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
					<?php the_title(); ?>
				</a>
			</h2>
		<?php endif; ?>

		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta text-sm text-gray-600 mt-2">
				<?php interno_posted_by(); ?>
			</div>
		<?php endif; ?>
	</header>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="mb-6 rounded overflow-hidden">
			<?php the_post_thumbnail( 'large', ['class' => 'w-full h-auto rounded-lg'] ); ?>
		</div>
	<?php endif; ?>

	<div class="entry-content text-base leading-relaxed text-gray-800">
		<?php
		the_content(
			sprintf(
				wp_kses(
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'interno' ),
					['span' => ['class' => []]]
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages([
			'before' => '<div class="page-links mt-6 text-sm font-medium text-gray-700">' . esc_html__( 'Pages:', 'interno' ),
			'after'  => '</div>',
		]);
		?>
	</div>

	<footer class="entry-footer mt-6 border-t pt-4 text-sm text-gray-600">
		<?php interno_entry_footer(); ?>
	</footer>
</article>