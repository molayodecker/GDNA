<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/logo/favicon.ico">
  <?php wp_head(); ?>

<body class="overflow-x-hidden">
  <div class="nav container relative mx-auto pt-3 mb-0">
    <!--flex container nav items -->
    <div class="flex items-center justify-between space-x-20 my-2">
      <!-- Logo -->
      <div class="flex flex-row align-center z-30 w-[450px] animate_logo">
        <a href="<?php echo home_url() ?>"><img class="lg:w-32"
            src="<?php echo get_template_directory_uri(); ?>/assets/images/g-dna-logo-default.webp" alt=""
            id="logo"></a>
      </div>
      <!-- Menu Items -->
      <?php
      $primaryMenu = array(
        'theme_location' => 'primary',
        'menu' => '',
        'container' => 'div',
        'container_class' => false,
        'container_id' => '',
        'menu_id' => 'primary-menu',
        'menu_class' => 'gd-nav-primary',
        'fallback_cb' => 'wp_page_menu',
        'before' => '',
        'after' => '',
        'link_before' => '',
        'link_after' => '',
        'depth' => 0,
        'walker' => new gdna_wp_nav_menu_walker(),
        'exclude' => '16, 3'
      );
      wp_nav_menu($primaryMenu);
      ?>
      <a target="_blank"
        href="https://checkout.stripe.com/c/pay/cs_live_a1o1a9U77tZSOlqyoLSRk5zJcgMJ2Y9FZnbXmRnA03mnQVHtQFTe4E9zqn#fidkdWxOYHwnPyd1blppbHNgWjA0SE9qa1NHVldpN1xfUkFfdDddQXB9ZD1iZkdsYGZOdjRfS180V2NJfDVyPHFWf0FETnxOYEFLcEJNf3JRTGA2UmJmRm48cnRkTkF1V1BdPEtyPU5TN1M9NTVNVX13RDVuMycpJ3VpbGtuQH11anZgYUxhJz8nPXJIZ0xSYmdSYFwyZzRWYVRUJ3gl"
        class="px-8 py-2 text-white bg-softRed border-2 border-softRed rounded-lg shadow-md hover:text-softRed hover:bg-white">
        Donate
      </a>
    </div>
  </div>
  </div>
  </head>