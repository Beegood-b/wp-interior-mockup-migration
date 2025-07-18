<?php
/*
Template Name: "Home Page"
*/
?>

<?php get_header(); ?>

<!-- page wrapper -->
<main class="max-w-[1920px] mx-auto overflow-hidden">
  <!-- grid img -->
  <!-- <div class="xl:bg-grid xl:bg-center xl:bg-repeat-y fixed top-0 bottom-0 left-0 right-0 z-10"></div> -->

  <!-- hero -->
  <section
    class="hero h-[640px] xl:h-[840px] bg-hero bg-center lg:bg-cover bg-no-repeat bg-fixed xl:rounded-bl-[290px] relative z-20">
    <div class="container mx-auto h-full flex items-center absolute inset-0">
      <!-- text -->
      <div class="hero__text w-[567px] flex flex-col items-center text-center xl:text-left lg:items-start">
        <h1 class="h1 mb-8"><?php echo esc_html(get_field('main_title')); ?></h1>
        <p class="mb-8"><?php echo esc_html(get_field('main_subtitle')); ?></p>
        <!-- btn -->
        <?php
        $main_button = get_field('site_button', 'options');
        if ($main_button && !empty($main_button['site_button_url']) && !empty($main_button['site_button_text'])): ?>
          <a href="<?php echo esc_url($main_button['site_button_url']); ?>"
            class="btn btn-primary mx-auto cursor-pointer xl:mx-0"
            target="_blank"><?php echo esc_html($main_button['site_button_text']); ?>
            <i class="ri-arrow-right-line text-accent"></i>
          </a>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- steps -->
  <?php
  $steps_section = get_field('steps_section');
  $icon_1 = $steps_section['steps_icon_g1'];
  $icon_2 = $steps_section['steps_icon_g2'];
  $icon_3 = $steps_section['steps_icon_g3'];
  ?>
  <section class="steps mt-[80px] xl:mt-[200px] relative z-20">
    <div class="container mx-auto">
      <!-- grid items -->
      <div class="grid grid-cols-1 gap-12 xl:grid-cols-3">
        <!-- step-1 -->
        <div class="steps__step text-center">
          <div class="mb-4">
            <?php if ($icon_1): ?>
              <i class="<?php echo esc_attr($icon_1); ?> text-5xl text-accent"></i>
            <?php endif; ?>
          </div>
          <h3 class="h3 mb-5"><?php echo esc_html($steps_section['steps_title_g1']); ?></h3>
          <p class="mb-5 max-w-md mx-auto"><?php echo esc_html($steps_section['steps_subtitle_g1']); ?></p>
          <a href="<?php echo esc_url($steps_section['steps_link_g1']); ?>"
            class="font-medium flex justify-center gap-2" target="_blank">Read more <i
              class="ri-arrow-right-line text-accent"></i></a>
        </div>
        <!-- step-2 -->
        <div class="steps__step text-center">
          <div class="mb-4">
            <?php if ($icon_2): ?>
              <i class="<?php echo esc_attr($icon_2); ?> text-5xl text-accent"></i>
            <?php endif; ?>
          </div>
          <h3 class="h3 mb-5"><?php echo esc_html($steps_section['steps_title_g2']); ?></h3>
          <p class="mb-5 max-w-md mx-auto"><?php echo esc_html($steps_section['steps_subtitle_g2']); ?></p>
          <a href="<?php echo esc_url($steps_section['steps_link_g2']); ?>"
            class="font-medium flex justify-center gap-2" target="_blank">Read more <i
              class="ri-arrow-right-line text-accent"></i></a>
        </div>
        <!-- step-3 -->
        <div class="steps__step text-center">
          <div class="mb-4">
            <?php if ($icon_3): ?>
              <i class="<?php echo esc_attr($icon_3); ?> text-5xl text-accent"></i>
            <?php endif; ?>
          </div>
          <h3 class="h3 mb-5"><?php echo esc_html($steps_section['steps_title_g3']); ?></h3>
          <p class="mb-5 max-w-md mx-auto"><?php echo esc_html($steps_section['steps_subtitle_g3']); ?></p>
          <a href="<?php echo esc_url($steps_section['steps_link_g3']); ?>"
            class="font-medium flex justify-center gap-2" target="_blank">Read more <i
              class="ri-arrow-right-line text-accent"></i></a>
        </div>
      </div>
    </div>
  </section>

  <!-- about -->
  <section id="about" class="about xl:scroll-mt-[70px] mt-[80px] xl:mt-[200px] relative z-20">
    <div class="container mx-auto xl:px-0">
      <div class="flex flex-col xl:flex-row text-center xl:text-left justify-between items-center gap-8 xl:gap-[74px]">
        <!-- text -->
        <div
          class="about__text flex-1 order-2 xl:order-none max-w-xl xl:max-w-[410px] flex flex-col items-center xl:items-start gap-8">
          <h2 class="h2"><?php echo esc_html(get_field('about_title')); ?></h2>
          <p><?php echo esc_html(get_field('about_subtitle')); ?></p>
          <!-- phone -->
          <div class="flex items-center jusitfy-center xl:justify-start gap-4">
            <div class="bg-accent/15 w-[93px] h-[93px] rounded-full flex justify-center items-center">
              <i class="ri-phone-fill text-accent text-4xl"></i>
            </div>
            <div class="text-left">
              <div class="text-2xl font-bold"><?php echo esc_html(get_field('about_phone')); ?></div>
              <div>Call Us Anytime</div>
            </div>
          </div>
          <!-- btn -->
          <?php
          if ($main_button && !empty($main_button['site_button_url']) && !empty($main_button['site_button_text'])): ?>
            <a href="<?php echo esc_url($main_button['site_button_url']); ?>"
              class="btn btn-primary mx-auto cursor-pointer xl:mx-0"
              target="_blank"><?php echo esc_html($main_button['site_button_text']); ?>
              <i class="ri-arrow-right-line text-accent"></i>
            </a>
          <?php endif; ?>
        </div>
        <!-- img -->
        <div class="about__img order-1 xl:order-none max-w-[453px] mx-auto xl:max-w-none xl:mx-0">
          <img src="<?php echo esc_url(get_field('about_image')); ?>"
            alt="kitchen interior image related to about us section" />
        </div>
      </div>
    </div>
  </section>

  <!-- testimonial -->
  <?php $testimonial_cards = get_field('testimonial_cards'); ?>

  <section id="testimonials" class="testimonial xl:scroll-mt-[70px] mt-[80px] xl:mt-[200px] relative z-20">
    <div class="testimonial__bg container mx-auto bg-primary xl:rounded-[70px] px-6">
      <div class="flex flex-col pt-[80px] pb-[110px]">
        <h2 class="testimonial__title h2 mb-9 text-center !text-accent">
          <?php echo esc_html(get_field('testimonial_title')); ?>
        </h2>
        <!-- slider -->
        <div class="w-full">
          <div class="testimonial__slider swiper h-[400px]">
            <div class="swiper-wrapper">
              <!-- slide-1 -->

              <?php foreach ($testimonial_cards as $card): ?>
                <div class="swiper-slide">
                  <!-- item -->
                  <div
                    class="testimonial__item w-full max-w-[450px] h-[340px] bg-accent-secondary rounded-[30px] flex flex-col justify-center p-9 mx-auto">
                    <div class="flex gap-4 mb-6">
                      <img src="<?php echo esc_url($card['testimonial_image']); ?>" alt="client avatar" />
                      <div>
                        <h3 class="h3"><?php echo esc_html($card['testimonial_name']); ?></h3>
                        <div><?php echo esc_html($card['testimonial_country_city']); ?></div>
                      </div>
                    </div>
                    <p><?php echo esc_html($card['testimonial_review']); ?></p>
                  </div>
                </div>
              <?php endforeach; ?>

            </div>
            <!-- swiper pagination -->
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- brands -->
  <section class="brands mt-[80px] xl:mt-[200px] relative z-20">
    <div class="container mx-auto">
      <div class="flex flex-col xl:flex-row items-center justify-between gap-12"
        style="display: flex; flex-wrap: wrap;">

        <?php if (get_field('brand_images')): ?>
          <?php while (has_sub_field('brand_images')): ?>
            <img class="brands__img " src="<?php echo esc_url(get_sub_field('brand_image')); ?>" alt="brand label">
          <?php endwhile; ?>
        <?php endif; ?>

      </div>
    </div>
  </section>

  <!-- work -->
  <section id="our-work" class="work xl:scroll-mt-[70px] mt-[80px] xl:mt-[150px] relative z-20">
    <div class="container mx-auto xl:px-0">
      <!-- text -->
      <div class="text-center mb-24">
        <h2 class="work__title h2 mb-4"><?= esc_html(get_field('our_work_title')) ?></h2>
        <p class="work__subtitle max-w-3xl mx-auto">
          <?= esc_html(get_field('our_work_subtitle')) ?>
        </p>
      </div>
      <!-- grid -->
      <div class="work__grid grid grid-cols-1 xl:grid-cols-2 gap-x-[104px] gap-y-[56px]">
        <!-- grid item -->
         <?php if (have_rows('our_work_cards')) : ?>
          <?php while (have_rows('our_work_cards')) : the_row(); ?>
              <div class="w-full max-w-[548px] h-full mx-auto">
                <img class="mb-6" src="<?= esc_url(get_sub_field('our_work_card_image')) ?>" alt="" />
                <div class="flex justify-between items-center w-full">
                  <div>
                    <h3 class="h3"><?= esc_html(get_sub_field('our_work_card_title')) ?></h3>
                    <p><?= esc_html(get_sub_field('our_work_card_category')) ?></p>
                  </div>
                  <button
                    class="bg-accent-secondary hover:bg-accent-secondary/20 cursor-pointer transition-all w-[70px] h-[70px] rounded-full">
                    <a href="<?= esc_url(get_sub_field('our_work_card_button')) ?>" target="_blank"><i class="ri-arrow-right-s-line text-3xl text-primary pl-1"></i></a>
                  </button>
                </div>
              </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- stats -->
  <section class="stats mt-[80px] xl:mt-[150px] relative z-20 bg-accent-secondary py-[80px] xl:py-[150px]">
    <div class="container mx-auto">
      <!-- grid -->
      <div class="grid grid-cols-1 xl:grid-cols-4 gap-12">
        <!-- grid item -->
        <div class="stats__item text-center xl:border-r xl:border-accent">
          <h3 class="h1 !text-accent">12</h3>
          <p class="">Years Of Experience</p>
        </div>
        <!-- grid item -->
        <div class="stats__item text-center xl:border-r xl:border-accent">
          <h3 class="h1 !text-accent">85</h3>
          <p class="">Projects Completed</p>
        </div>
        <!-- grid item -->
        <div class="stats__item text-center xl:border-r xl:border-accent">
          <h3 class="h1 !text-accent">15</h3>
          <p class="">Active Projects</p>
        </div>
        <!-- grid item -->
        <div class="stats__item text-center">
          <h3 class="h1 !text-accent">95</h3>
          <p class="">Happy Customers</p>
        </div>
      </div>
    </div>
  </section>

  <!-- news -->
  <section id="news" class="news mt-[80px] xl:mt-[150px] relative z-20">
    <div class="container mx-auto px-0">
      <!-- text -->
      <div class="max-w-[810px] mx-auto text-center mb-[52px]">
        <h2 class="news__title h2 mb-3">Articles & News</h2>
        <p class="news__subtitle">
          It is a long established fact that a reader will be distracted by
          the of readable content of a page when lookings at its layouts the
          points of using.
        </p>
      </div>
      <!-- grid -->
      <div class="news__grid grid grid-cols-1 xl:grid-cols-3 gap-[27px]">
        <!-- grid item -->
        <div
          class="news__item w-full max-w-[382px] h-[520px] border border-primary/20 rounded-[62px] p-[20px] hover:bg-accent-secondary transition-all group cursor-pointer mx-auto xl:mx-0">
          <img class="mb-5" src="<?= esc_url(get_template_directory_uri()) ?>/assets/img/news/01.png" alt="" />
          <div class="flex flex-col gap-[30px]">
            <h3 class="h3">
              Let's Get Solution For Building Construction Work
            </h3>
            <div class="flex items-center justify-between">
              <p class="text-base">22, June, 2024</p>
              <button class="bg-accent-secondary w-[52px] h-[52px] rounded-full group-hover:bg-white transition-all">
                <i class="ri-arrow-right-s-line text-3xl text-primary pl-1"></i>
              </button>
            </div>
          </div>
        </div>
        <!-- grid item -->
        <div
          class="news__item w-full max-w-[382px] h-[520px] border border-primary/20 rounded-[62px] p-[20px] hover:bg-accent-secondary transition-all group cursor-pointer mx-auto xl:mx-0">
          <img class="mb-5" src="<?= esc_url(get_template_directory_uri()) ?>/assets/img/news/02.png" alt="" />
          <div class="flex flex-col gap-[30px]">
            <h3 class="h3">Low Cost Latest Invented Interior Designing</h3>
            <div class="flex items-center justify-between">
              <p class="text-base">24, June, 2024</p>
              <button class="bg-accent-secondary w-[52px] h-[52px] rounded-full group-hover:bg-white transition-all">
                <i class="ri-arrow-right-s-line text-3xl text-primary pl-1"></i>
              </button>
            </div>
          </div>
        </div>
        <!-- grid item -->
        <div
          class="news__item w-full max-w-[382px] h-[520px] border border-primary/20 rounded-[62px] p-[20px] hover:bg-accent-secondary transition-all group cursor-pointer mx-auto xl:mx-0">
          <img class="mb-5" src="<?= esc_url(get_template_directory_uri()) ?>/assets/img/news/03.png" alt="" />
          <div class="flex flex-col gap-[30px]">
            <h3 class="h3">Best For Any Office & Business Interior</h3>
            <div class="flex items-center justify-between">
              <p class="text-base">28, June, 2024</p>
              <button class="bg-accent-secondary w-[52px] h-[52px] rounded-full group-hover:bg-white transition-all">
                <i class="ri-arrow-right-s-line text-3xl text-primary pl-1"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- contact -->
  <section id="contact" class="contact xl:scroll-mt-[200px] mt-[80px] xl:mt-[150px] relative z-20">
    <div class="contact__container container mx-auto bg-primary sm:rounded-[70px] py-[80px]">
      <div class="contact__text max-w-[640px] mx-auto text-center">
        <h2 class="h2 !text-white mb-4">Do You Want To Join Interno?</h2>
        <p class="text-white mb-8 max-w-sm xl:max-w-none mx-auto">
          It is a long established fact will be distracted
        </p>
        <button class="btn btn-accent mx-auto">
          Connect With Us <i class="ri-arrow-right-line text-primary"></i>
        </button>
      </div>
    </div>
  </section>

  <!-- temporary div -->
  <!-- <div class="h-[3000px]"></div> -->
</main>

<?php get_footer(); ?>