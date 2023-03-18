<?php get_header() ?>
  <!-- Hamburger menu-->
  <button id="menu-btn" class="z-50 block md:hidden focus:outline-none hamburger">
    <span class="hamburger-top"></span>
    <span class="hamburger-middle"></span>
    <span class="hamburger-bottom"></span>
  </button>
  <!-- Hero Section-->
  <section id="hero" style="background-image: linear-gradient(to bottom, rgba(99, 212, 113, 0.52), rgba(35, 51, 41, 0.80)), url('<?php echo get_template_directory_uri(); ?>/assets/images/blackstar.webp'); background-size: cover; background-position: center center !important;">
    <div class="container max-w-none flex justify-evenly flex-wrap align-center text-center">
        <div>
          <h1 class="hero-title">
            <?php
                if(have_posts()) {
                    while(have_posts()){
                        the_post();
                        the_content();
                    }
                } 
            ?>
          </h1>
        </div>
        <div class="my-16">
          <a href="#" class="hero-join">Join Now</a>
        </div>
    </div>
  </section>
  <section id="news" style="background-image: linear-gradient(to bottom, rgba(254, 243, 199, 0.52), rgba(252, 211, 77, 0.80)), url('<?php echo get_template_directory_uri(); ?>/assets/images/dance.webp'); background-size: cover; background-position: center center !important;">
    <div class="flex flex-col justify-evenly flex-wrap align-center py-6">
      <div id="news-container" class="news-container">
        <div class="news-title">Latest GDNA News</div>
        <div class="px-10 space-y-5">
            <?php echo do_shortcode('[front_page_post cat="latest"]'); ?>
            <p><a href="https://g-dna.org/index.php/membership/">Read more</a></p>
        </div>
      </div>

      <div id="news-container-features" class="news-container-features">
        <div class="news-title-feature">Featured News</div>
        <div class="px-10 space-y-5">
        <?php echo do_shortcode('[front_page_post cat="featured"]'); ?>
        <p><a href="#">Read more</a></p>
      </div>
    </div>
  </section>
  <section>
    <div class="flex flex-col justify-content items-center text-2xl lg:text-6xl py-10">
      <h1 class="font-serif text-center px-8 py-3 text-[#0BAB64]">Join the movement to empower Ghanaian Nurses to deliver high-quality, patient-centered health care Globally.</h1>
      <a href="https://g-dna.org/index.php/membership/"class="text-lg px-10 py-2 my-4 text-white bg-[#de2f3d] rounded-full shadow-md hover:bg-[#f84c4c]">Join Now</a>
    </div>
  </section>
  <section>
    <section>
    <h4>Join a thriving community.</h4>
      <!--photo grid-->
      <div class="scroller">
        <div class="grid-scroller" style="grid-auto-flow: column;">
          <div class="tall">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/20.webp" alt="">
          </div>
          <div class="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/1.webp" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/30.webp" alt="">
          </div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/2.webp" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/3.webp" alt="">
          </div>
          <div class="tall">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/7.webp" alt="">
          </div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/4.webp" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/29.webp" alt="">
          </div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/5.webp" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/28.webp" alt="">
          </div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/6.webp" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/31.webp" alt="">
          </div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/8.webp" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/32.webp" alt="">
          </div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/9.webp" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/33.webp" alt="">
          </div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/10.webp" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/11.webp" alt="">
          </div>
          <div class="tall">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/12.webp" alt="">
          </div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/13.webp" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/14.webp" alt="">
          </div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/16.webp" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/15.webp" alt="">
          </div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/17.webp" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/34.webp" alt="">
          </div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/18.webp" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/19.webp" alt="">
          </div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/21.webp" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/35.webp" alt="">
          </div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/22.webp" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/26.webp" alt="">
          </div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/23.webp" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/32.webp" alt="">
          </div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/36.webp" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/37.webp" alt="">
          </div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/38.webp" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/39.webp" alt="">
          </div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/24.webp" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/25.webp" alt="">
          </div>
          <div class="tall">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grid/27.webp" alt="">
          </div>
        </div>
      </div>
    </section>
  </section>
  
  <?php get_footer() ?>