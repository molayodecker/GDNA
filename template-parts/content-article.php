<div class="container post-content">
    <?php if (has_post_thumbnail()) {?>
    <img src="<?php the_post_thumbnail('thumbnail');?>" alt="thumbnail">
    <?php } ?>
    <h1><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>
</div>