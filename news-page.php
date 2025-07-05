<?php
/*
Template Name: "News Page"
*/
?>

<?php get_header(); ?>

<main class="posts my-[80px] xl:my-[100px] relative z-20">
  <div class="container mx-auto">
    <h1 class="text-6xl">Latest News</h1>
    <?php
    $args = array(
      'post_type' => 'post',      // Только посты
      'posts_per_page' => 10,     // Кол-во постов
    );
    $query = new WP_Query($args);

    if ($query->have_posts()):
      while ($query->have_posts()):
        $query->the_post(); ?>
        <article class="bg-[#f1f1f1] shadow-lg rounded-2xl p-10 my-10">
          <div class="flex justify-between items-center mb-4">
            <h2 class="text-3xl"><?php the_title(); ?></h2>
            <span class="text-sm">
              <i><?php the_time('j F, Y'); ?></i>
            </span>
          </div>

          <div class="flex items-center justify-between mt-4">
            <a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
          </div>

        </article>
      <?php endwhile;
      wp_reset_postdata();
    endif;
    ?>

  </div>
</main>

<?php get_footer(); ?>