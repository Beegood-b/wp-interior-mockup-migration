<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Interno
 */

?>

<!-- footer -->
<footer class="footer bg-primary h-15 flex items-center justify-center">
  <p class="text-accent text-sm"><?= esc_html(get_field('site_footer', 'options')) ?></p>
</footer>

<?php wp_footer(); ?>
</body>

</html>