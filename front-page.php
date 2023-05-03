<?php get_header() ?>
  <!-- Hero Section-->
  <!-- <section id="hero" style="background-image: linear-gradient(to bottom, rgba(99, 212, 113, 0.52), rgba(35, 51, 41, 0.80)), url('https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/backgroundImages/a2kl4rmtyoq69ormsn5a'); background-size: cover; background-position: center center !important;"> -->
  <?php echo do_shortcode('[wp-video-popup video="https://www.youtube.com/watch?v=H1ZWyQD1l9U"]'); ?>
  <a href="#" class="wp-video-popup">
  <!-- <section id="hero" style="background-image: url('https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/backgroundImages/G-DNA_GrantVideo_Final_2_2_plnw0t'); background-size: cover; background-position: center center !important;"> -->
  <section id="hero" style="position: relative; top: 0; ">
  <!--NOTE: use video only when needed. This show be converted into a plugin in future-->
    <video width="100%" height="100%" loop="loop" autoplay="autoplay" preload="auto" poster="https://res.cloudinary.com/dwbs6mbsy/video/upload/h_300,l_gdna:backgroundImages:play-button-icon-png-18910_kvhki0,w_300/w_600/f_auto:animated/e_loop/v1683128623/gdna/backgroundImages/ylrhnduildfm0hsb0aks.mp4">
      <source src="https://res.cloudinary.com/dwbs6mbsy/video/upload/h_300,l_gdna:backgroundImages:play-button-icon-png-18910_kvhki0,w_300/v1683133652/gdna/backgroundImages/ylrhnduildfm0hsb0aks.mp4" type="video/mp4" />
    </video>
    <div class="container max-w-none flex justify-evenly flex-wrap align-center text-center" style="position: absolute; top: 0;">
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
          <a href="https://g-dna.org/index.php/membership/" class="hero-join">Join Now</a>
        </div>
    </div>
  </section>  
  </a>
  <section id="news" style="background-image: linear-gradient(to bottom, rgba(254, 243, 199, 0.52), rgba(252, 211, 77, 0.80)), url('https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/backgroundImages/kcfd161zbdgfpbdrx8lo'); background-size: cover; background-position: center center !important;">
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
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/nkjyi1h8jmhhh9s5ieet" alt="">
          </div>
          <div class="">
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/b35jh1eanoxnclqse1ms" alt="">
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/gixf2ffwtur1zrhbzo1r" alt="">
          </div>
          <div>
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/srpkbrcwz8qagokt79s7" alt="">
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/rxyz4i8pt8x5liedjniw" alt="">
          </div>
          <div class="tall">
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/gr28ljgo25rxyu5vojav" alt="">
          </div>
          <div>
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/nqvr8dmcfw0pumwivanx" alt="">
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/ts3h7efmxuqkoouv0vv1" alt="">
          </div>
          <div>
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/arsuhxkeuziovqqahgjb" alt="">
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/uznogz351k1ulcrdf179" alt="">
          </div>
          <div>
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/ld9dgle5zsxmqwcwhvbt" alt="">
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/c4gq1ug6letby3hxe7fl" alt="">
          </div>
          <div>
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/thhj6rp1qk1gwpgkovxh" alt="">
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/jrkudxpyrkmtiwf7wosw" alt="">
          </div>
          <div>
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/qghqgtuqqcpa818susel" alt="">
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/kmob2imq6ofyesp85xa1" alt="">
          </div>
          <div>
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/sqfpctmdphz1kz4y4n96" alt="">
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/cukpcudcgvozpimkfjl4" alt="">
          </div>
          <div class="tall">
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/qm9dpcnajeohd6ztxvy0" alt="">
          </div>
          <div>
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/fcsbsrbahzu4jpl3dbtv" alt="">
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/guwx0xqpqp4ky2bhviby" alt="">
          </div>
          <div>
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/uly8hgmtbj3jcmmqpt2m" alt="">
            <img src="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/xexwrywg3xhgnsgncj60" alt="">
          </div>
          <div>
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/pd39ccqfknqnkzgthuh2" alt="">
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/vtizxm35vbcxtsqqypfr" alt="">
          </div>
          <div>
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/jxgdihw7wp7cjivo0lgc" alt="">
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/ntrp7q2q1btdryue3qbs" alt="">
          </div>
          <div>
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/ucznevgqrigjuyvee0bn" alt="">
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/ed483d3ve57hdkkx8sez" alt="">
          </div>
          <div>
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/mz5kxy4kpu5oaiwoaj65" alt="">
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/oudilhuekquhoqazydrv" alt="">
          </div>
          <div>
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/fqcpaoalsqjnhvxkqqmz" alt="">
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/jrkudxpyrkmtiwf7wosw" alt="">
          </div>
          <div>
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/ilcx9hqt0tqzmb7vetzq" alt="">
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/jrkudxpyrkmtiwf7wosw" alt="">
          </div>
          <div>
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/jlstb7ath69pzehcd0ex" alt="">
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/gcjo1xhnxbcuwks67xtb" alt="">
          </div>
          <div>
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/xjmyajwxlelgmmjavfbn" alt="">
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/unanzixuntqf2wktfoi5" alt="">
          </div>
          <div class="tall">
            <img data-bg="https://res.cloudinary.com/dwbs6mbsy/image/upload/gdna/grid/diya5l7gy4zjghd9k8po" alt="">
          </div>
        </div>
      </div>
    </section>
  </section>
  
  <?php get_footer() ?>