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
<footer class="footer mt-[80px] xl:mt-[150px] relative z-20">
  <div class="container mx-auto px-0">
    <div class="flex flex-col xl:flex-row xl:gap-[100px] xl:mb-[150px]">
      <div class="footer__item w-full max-w-[400px] mx-auto mb-8 text-center xl:text-left">
        <!-- logo -->
        <a class="flex justify-center xl:justify-start mb-8" href="#">
          <img src="<?= esc_url(get_template_directory_uri()) ?>/assets/img/logo.svg"
            alt="" />
        </a>
        <p class="mb-8 text-xl">
          It is a long established fact that a reader will be distracted
          by the of readable
        </p>
        <!-- socials -->
        <ul class="text-primary flex gap-[54px] justify-center xl:justify-start">
          <li>
            <a href="#"><i class="ri-facebook-fill"></i></a>
          </li>
          <li>
            <a href="#"><i class="ri-twitter-fill"></i></a>
          </li>
          <li>
            <a href="#"><i class="ri-linkedin-fill"></i></a>
          </li>
          <li>
            <a href="#"><i class="ri-instagram-fill"></i></a>
          </li>
        </ul>
      </div>
      <div
        class="flex flex-1 flex-col xl:flex-row text-center xl:text-left gap-12 my-8 xl:my-0 xl:gap-[100px] xl:justify-end">
        <div class="footer__item">
          <h3 class="h3 mb-3">Pages</h3>
          <ul class="flex flex-col gap-4">
            <li><a href="#about">About Us</a></li>
            <li><a href="#testimonial">Testimonial</a></li>
            <li><a href="#our-work">Our Work</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
        <div class="footer__item">
          <h3 class="h3 mb-3">Services</h3>
          <ul class="flex flex-col gap-4">
            <li><a href="">Kitchen</a></li>
            <li><a href="">Living Area</a></li>
            <li><a href="">Bathroom</a></li>
            <li><a href="">Bedroom</a></li>
          </ul>
        </div>
        <div class="footer__item">
          <h3 class="h3 mb-3">Contact</h3>
          <div class="flex flex-col gap-6 text-[20px]">
            <p>
              55 East Birchwood Ave. <br />
              Brooklyn, New York 11201
            </p>
            <a href="mailto:contact@interno.com">contact@interno.com</a>
            <a href="tel:+1234567890">(123) 456 - 7890</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- copyright -->
  <p class="footer__copyright text-center text-sm py-10 bg-primary text-accent">
    Copyright &copy; Interno 2025. All Rights Reserved.
  </p>
</footer>


<?php wp_footer(); ?>
</body>

</html>