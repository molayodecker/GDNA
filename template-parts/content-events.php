<div class="breadcrumps">
<nav class="w-full rounded-md">
  <ol class="list-reset flex" style="margin-left: 2%;">
    <li>
      <a
        href="<?php echo home_url(); ?>"
        class=" capitalize text-primary transition duration-150 ease-in-out hover:text-primary-600 focus:text-primary-600 active:text-primary-700 dark:text-primary-400 dark:hover:text-primary-500 dark:focus:text-primary-500 dark:active:text-primary-600"
        >Home</a
      >
    </li>
    <li>
      <span class="mx-2 text-neutral-500 dark:text-neutral-400">/</span>
    </li>
    <li style="text-transform: lowercase; margin-left: 2px;"><?php the_title(); ?></li>
  </ol>
</nav>
</div>
<div class="post-content">
    <p><?php the_content(); ?></p>
</div>
