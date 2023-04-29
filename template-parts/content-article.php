<div class="post-content">
    <?php if (has_post_thumbnail()) {?>
    <img src="<?php the_post_thumbnail('thumbnail');?>" alt="thumbnail">
    <?php } ?>
    <h2><?php the_title(); ?></h2>
    <p><?php the_content(); ?></p>
</div>