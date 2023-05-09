<?php if(strtotime('2023-05-11') > time()): ?>
<div class="action-bar" style="dislay: flex; text-align: center; background-color: rgb(242,67,24); color: #fff; padding: 7px; z-index: 100">
    <strong style="font-size: 20px;">International Nurses Day 2023 Webinar</strong>
    <small style="padding: 0 0 0 0.43rem; font-size: 15px;">Thursday May 11TH @ 2PM EDT | 6PM GMT | 7PM BST</small>
    <span style="padding: 0 0 0 0.43rem;">
    <a href="https://jhuson.zoom.us/webinar/register/WN_SmAZBQpvThWqeE-RHZQXkA" target="_blank">
      <button class="action-bar-button">Register Now</button>
    </a>
    </span>
</div>
<?php endif; ?>
<div <?php echo (strtotime('2023-05-11') > time()) ? 'class="mobile-nav-with-action-bar"' : 'class="mobile-nav-without-action-bar"' ?> >
    <div>
        <button id="menu-btn" class="z-50 block md:hidden focus:outline-none hamburger">
        <span class="hamburger-top"></span>
        <span class="hamburger-middle"></span>
        <span class="hamburger-bottom"></span>
        <div id="menu"
            class="fixed inset-0 z-20 hidden flex-col items-center self-end w-full h-full m-h-screen px-6 py-1 pt-32 pb-4 tracking-widest text-white uppercase divide-y divide-grey-500 opacity-90 bg-veryDarkBlue">
            <?php wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'container' => '',
                    'menu_class' => 'main-nav',
                    'items_wrap' => '%3$s',
                    'walker' => new mobile_wrap()
                )
            ); ?>
            <div class="w-full py-3 text-center">
                <a target="_blank" href="https://buy.stripe.com/8wMbIWgbWeY7b1SdQQ" class="block hover:text-softRed">Donate</a>
            </div>
        </div>
        </button>
    </div>
    <div  <?php echo (strtotime('2023-05-11') > time()) ? 'class="logo-avatar-with-action-bar"' : 'class="logo-avatar-without-action-bar"' ?> >
        <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white" src="<?php echo get_template_directory_uri(); ?>/assets/images/g-dna-logo-default.webp" alt="" id="logo">
    </div>
</div>
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
        <div class="flex-container-nav-items">
            <!-- Logo -->
            <div class="flex flex-row align-center z-30 w-[450px]">
            <a href="<?php echo home_url(); ?>"><img class="logo"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/g-dna-logo-default.webp" alt=""
                    id="logo">
            </a>
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
            <a href="https://buy.stripe.com/8wMbIWgbWeY7b1SdQQ"
                class="px-5 hidden text-white bg-softRed border-2 border-softRed rounded-lg shadow-md hover:text-softRed hover:bg-white md:flex">
                Donate
            </a>
        </div>
        <!--Mobile View -->
        
    </div>
    </div>
    </head>